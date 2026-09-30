import fs from 'node:fs/promises';
import path from 'node:path';
import { buildReferenceMap, loadGuideTopics } from './guide-structure.mjs';

const ROOT = process.cwd();
const CURRENT_YEAR = String(new Date().getFullYear());

function yamlQuote(value) {
  return JSON.stringify(value);
}

function trimRightLines(lines) {
  while (lines.length > 0 && lines.at(-1) === '') {
    lines.pop();
  }
  return lines;
}

function isListItem(line) {
  return /^(\*|\-|\d+\.)\s+/.test(line);
}

function isOrderedListItem(line) {
  return /^\d+\.\s+/.test(line);
}

function isHeading(line) {
  return /^#{1,6}\s+/.test(line);
}

function isHtmlBlockLine(line) {
  return /^\s*</.test(line);
}

function normalizeOrderedListBlocks(lines) {
  const normalized = [];
  let inOrderedList = false;

  for (const line of lines) {
    if (isOrderedListItem(line)) {
      inOrderedList = true;
      normalized.push(line);
      continue;
    }

    if (inOrderedList && isHeading(line)) {
      inOrderedList = false;
      normalized.push(line);
      continue;
    }

    if (!inOrderedList || line === '') {
      normalized.push(line);
      continue;
    }

    normalized.push(line.startsWith('    ') ? line : `    ${line}`);
  }

  return normalized;
}

function normalizeBodyLines(lines) {
  const normalized = [];
  let inList = false;

  for (let i = 0; i < lines.length; i += 1) {
    const line = lines[i];
    const previous = normalized.at(-1);
    const nextNonEmpty = lines.slice(i + 1).find((candidate) => candidate !== '');

    if (line === '') {
      if (previous === '' || previous === undefined) {
        continue;
      }
      if (isHtmlBlockLine(previous) && nextNonEmpty && isHeading(nextNonEmpty)) {
        normalized.push('');
        inList = false;
        continue;
      }
      if (inList && nextNonEmpty && isListItem(nextNonEmpty)) {
        continue;
      }
      normalized.push('');
      inList = false;
      continue;
    }

    if (
      previous === '' &&
      normalized.length >= 2 &&
      isListItem(normalized.at(-2)) &&
      isListItem(line)
    ) {
      normalized.pop();
    }

    normalized.push(line);
    if (isListItem(line)) {
      inList = true;
    } else if (isHeading(line)) {
      inList = false;
    }
  }

  for (let i = normalized.length - 2; i >= 0; i -= 1) {
    if (
      normalized[i] === '' &&
      isHeading(normalized[i + 1]) &&
      !isHtmlBlockLine(normalized[i - 1] ?? '')
    ) {
      normalized.splice(i, 1);
    }
  }

  return trimRightLines(normalized);
}

const STEPS_HEADINGS = new Set([
  'Steps',
  'Arbeitsschritte',
  'Étapes',
  'Шаги',
  'Кроки',
  'گام‌ها',
  'Passos',
  'Pasos',
  '手順',
  '步骤',
  '步驟',
]);

function wrapProcedureLists(lines) {
  const transformed = [];
  let inStepsSection = false;
  let usesStepsComponent = false;

  for (let index = 0; index < lines.length; index += 1) {
    const line = lines[index];
    const stepsHeadingMatch = line.match(/^##\s+(.+)$/);
    if (stepsHeadingMatch) {
      inStepsSection = STEPS_HEADINGS.has(stepsHeadingMatch[1].trim());
      transformed.push(line);
      continue;
    }

    if (inStepsSection && /^1\.\s+/.test(line)) {
      const block = [line];
      index += 1;

      while (index < lines.length) {
        const candidate = lines[index];
        if (/^##\s+/.test(candidate) || /^###\s+/.test(candidate)) {
          index -= 1;
          break;
        }
        if (candidate === '' || /^1\.\s+/.test(candidate) || /^ {4}\S?/.test(candidate)) {
          block.push(candidate);
          index += 1;
          continue;
        }

        index -= 1;
        break;
      }

      // The Astro <Steps> wrapper is no longer emitted (see guide-i90). The
      // block detection above still matters: it is what drives the four-space
      // continuation indent that committed content relies on, so only the tags
      // are dropped, not the traversal.
      usesStepsComponent = true;
      const blockLines = trimRightLines(block);
      transformed.push(...blockLines);
      // A raw HTML block must be closed by a blank line before whatever follows,
      // or a heading on the next line gets swallowed into the HTML block.
      // Inline Markdown images need no such separator.
      if (blockLines.length > 0 && isHtmlBlockLine(blockLines.at(-1))) {
        transformed.push('');
      }
      continue;
    }

    transformed.push(line);
  }

  return { lines: trimRightLines(transformed), usesStepsComponent };
}

function escapeMdxUnsafeAngles(lines) {
  return lines.map((line) => {
    if (/^\s*</.test(line) || line === '<Steps>' || line === '</Steps>') {
      return line;
    }
    return line.replace(/<([^>\n]+)>/g, '&lt;$1&gt;');
  });
}

function cleanLine(line) {
  return line.trim().replaceAll('copyright_upper_year', CURRENT_YEAR);
}

function mergeWrappedExternalLinks(lines) {
  const merged = [];

  for (let i = 0; i < lines.length; i += 1) {
    let current = lines[i].replaceAll('copyright_upper_year', CURRENT_YEAR);

    if (
      /\bhttps?:\/\/[^\s\[]+\[[^\]]*$/.test(current) ||
      /^image:images\/[^\[]+\[[^\]]*$/.test(current)
    ) {
      while (i + 1 < lines.length && !current.includes(']')) {
        i += 1;
        current = `${current} ${cleanLine(lines[i])}`;
      }
    }

    merged.push(current);
  }

  return merged;
}

// Retargeted during recovery (2026-09-15). The original wrote into the Astro
// layout: src/content/docs/<locale>, public/images/<locale>, src/generated/.
// Committed content now lives at content/<locale>/docs with images alongside it
// at content/<locale>/docs/images, referenced from Markdown as /images/<file>.
// Conversion reports go under build/ because build/ is gitignored.
function buildPaths(locale) {
  return {
    sourceDir: path.join(ROOT, 'source', locale),
    docsDir: path.join(ROOT, 'content', locale, 'docs'),
    publicImagesDir: path.join(ROOT, 'content', locale, 'docs', 'images'),
    reportFile: path.join(ROOT, 'build', 'migrate-reports', `${locale}-conversion-report.json`),
  };
}

function convertExternalLinks(text) {
  return text.replace(
    /\b(https?:\/\/[^\s\[]+)\[([^\]]+)\]/g,
    (_match, url, label) => `[${label}](${url})`
  );
}

function convertCrossReferences(text, refMap, report, slug) {
  return text.replace(/<<([^>,]+)(?:,([^>]+))?>>/g, (_match, rawTarget, explicitLabel) => {
    // Some sources write `<< id >>` with padding, so trim before lookup --
    // otherwise the reference silently fails to resolve.
    const target = rawTarget.trim();
    const href = refMap.get(target);
    if (!href) {
      report.unresolvedReferences.push({ slug, target });
      return explicitLabel ? `[${explicitLabel.trim()}](#unresolved-${target})` : `[${target}](#unresolved-${target})`;
    }

    const label = explicitLabel ? explicitLabel.trim() : target;
    return `[${label}](${href})`;
  });
}

// AsciiDoc marks monospace text with +plus signs+. Convert to Markdown code
// spans. Requires non-space at both inner edges so arithmetic like "1 + 2" and
// already-converted `code` are left alone.
function convertAsciiDocLiterals(text) {
  // The delimiters must not be flanked by alphanumerics, or version ranges like
  // "MySQL 10.4+ (MariaDB 10.4+, Percona 10.4+)" get read as one literal span
  // running from the first + to the second.
  return text.replace(/(?<![A-Za-z0-9])\+(\S(?:[^+\n]*\S)?)\+(?![A-Za-z0-9])/g, (match, inner) => (
    inner.includes('`') ? match : `\`${inner}\``
  ));
}

function convertInline(text, refMap, report, slug) {
  let converted = text.replaceAll('copyright_upper_year', CURRENT_YEAR);
  converted = convertExternalLinks(converted);
  converted = convertCrossReferences(converted, refMap, report, slug);
  converted = convertAsciiDocLiterals(converted);
  return converted;
}

function imageToMarkdown(line, report, slug, locale) {
  const match = line.match(/^image:images\/([^\[]+)\["([^"]*)"(?:,width="([^"]+)")?.*\]$/);
  if (!match) {
    report.unhandledBlocks.push({ slug, type: 'image', line });
    return line;
  }

  const [, fileName, alt, width] = match;
  // No locale segment: each locale builds as its own Zensical site with its
  // own images/ directory, so committed Markdown references /images/<file>.
  const src = `/images/${fileName}`;
  return width
    ? `<img src="${src}" alt="${alt}" width="${width}" />`
    : `![${alt}](${src})`;
}

function videoToHtml(line, report, slug) {
  const match = line.match(/^video::([^\[]+)\[title="([^"]+)"\]$/);
  if (!match) {
    report.unhandledBlocks.push({ slug, type: 'video', line });
    return line;
  }

  const [, src, title] = match;
  return [
    '<div class="embedded-video">',
    `  <iframe src="${src}" title="${title}" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>`,
    '</div>',
  ].join('\n');
}

function headingToMarkdown(line) {
  const match = line.match(/^(={4,6})\s+(.*)$/);
  if (!match) return line;

  const [, marks, title] = match;
  const level = marks.length - 2;
  return `${'#'.repeat(level)} ${title}`;
}

function isTableFence(line) {
  return /^\|=+$/.test(line.trim());
}

function splitTableLine(line) {
  const cells = [];
  let index = 0;

  while (index < line.length) {
    const markerIndex = line.indexOf('|', index);
    if (markerIndex === -1) break;

    let cursor = markerIndex + 1;
    while (cursor < line.length && line[cursor] === ' ') {
      cursor += 1;
    }

    let colspan = 1;
    const spanMatch = line.slice(cursor).match(/^(\d+)\+\|/);
    if (spanMatch) {
      colspan = Number.parseInt(spanMatch[1], 10);
      cursor += spanMatch[0].length;
    }

    const nextMarker = line.indexOf('|', cursor);
    const text = (nextMarker === -1 ? line.slice(cursor) : line.slice(cursor, nextMarker)).trim();
    cells.push({ text, colspan });
    index = nextMarker === -1 ? line.length : nextMarker;
  }

  return cells;
}

function parseAsciiDocTableRows(rows) {
  const parsedRows = [];
  let currentRow = [];
  let currentWidth = 0;
  let columnCount = 0;

  function finalizeRow() {
    if (currentRow.length === 0) return;

    if (columnCount === 0) {
      columnCount = currentRow.reduce((total, cell) => total + cell.colspan, 0);
    }

    if (currentRow.length === 1 && currentRow[0].colspan > 1 && parsedRows.length > 0) {
      const previousRow = parsedRows.at(-1);
      previousRow[previousRow.length - 1].text = `${previousRow[previousRow.length - 1].text}<br><br>${currentRow[0].text}`;
    } else {
      while (currentRow.reduce((total, cell) => total + cell.colspan, 0) < columnCount) {
        currentRow.push({ text: '', colspan: 1 });
      }
      parsedRows.push(currentRow);
    }

    currentRow = [];
    currentWidth = 0;
  }

  for (const rawRow of rows) {
    const trimmed = rawRow.trim();
    if (!trimmed) {
      finalizeRow();
      continue;
    }

    if (!trimmed.startsWith('|')) {
      if (currentRow.length > 0) {
        currentRow[currentRow.length - 1].text = `${currentRow[currentRow.length - 1].text} ${trimmed}`.trim();
      }
      continue;
    }

    const cells = splitTableLine(trimmed);
    if (cells.length === 0) {
      continue;
    }

    if (columnCount > 0 && currentWidth >= columnCount) {
      finalizeRow();
    }

    for (const cell of cells) {
      currentRow.push(cell);
      currentWidth += cell.colspan;
    }

    if (columnCount === 0) {
      columnCount = currentWidth;
    }

    if (currentWidth >= columnCount) {
      finalizeRow();
    }
  }

  finalizeRow();
  return parsedRows;
}

function tableToMarkdown(rows) {
  const parsedRows = parseAsciiDocTableRows(rows).map((row) =>
    row.flatMap((cell) => [cell.text, ...Array.from({ length: cell.colspan - 1 }, () => '')])
  );

  if (parsedRows.length === 0) return [];

  const [header, ...body] = parsedRows;
  return [
    `| ${header.join(' | ')} |`,
    `| ${header.map(() => '---').join(' | ')} |`,
    ...body.map((row) => `| ${row.join(' | ')} |`),
  ];
}

function convertDefinitionList(term, definition, anchor, slug, report, isGlossary, refMap) {
  const convertedTerm = convertInline(term.trim(), refMap, report, slug);
  const text = convertInline(definition.join(' ').trim(), refMap, report, slug);
  if (!text) {
    report.unhandledBlocks.push({ slug, type: 'definition-list', term });
    return [];
  }

  if (isGlossary) {
    return [
      `<a id="${anchor}"></a>`,
      `## ${convertedTerm}`,
      '',
      text,
    ];
  }

  if (/^\[[^\]]+\]\([^)]+\)$/.test(convertedTerm) || /^https?:\/\//.test(convertedTerm)) {
    return [`- ${convertedTerm}: ${text}`];
  }

  return [`- **${convertedTerm}:** ${text}`];
}

function buildFrontmatter(metadata, locale) {
  return [
    '---',
    `title: ${yamlQuote(metadata.title)}`,
    `description: ${yamlQuote(metadata.summary || metadata.title)}`,
    `id: ${yamlQuote(metadata.id)}`,
    `translation_key: ${yamlQuote(metadata.translationKey)}`,
    `source_locale: ${yamlQuote(locale)}`,
    `source_path: ${yamlQuote(metadata.sourcePath)}`,
    '---',
    '',
  ].join('\n');
}

async function convertTopic(slug, locale, refMap, report, paths) {
  const sourcePath = path.join(paths.sourceDir, `${slug}.asciidoc`);
  const content = await fs.readFile(sourcePath, 'utf8');
  const lines = mergeWrappedExternalLinks(content.split(/\r?\n/));

  const anchors = [...content.matchAll(/\[\[([^\]]+)\]\]/g)].map((match) => match[1]);
  const titleLine = lines.find((line) => /^==+\s+/.test(cleanLine(line)));
  if (!titleLine || anchors.length === 0) {
    report.skipped.push({ slug, reason: 'missing title or anchor' });
    return;
  }

  const title = cleanLine(titleLine).replace(/^==+\s+/, '');
  const metadata = {
    title,
    id: anchors[0],
    translationKey: slug,
    sourcePath: path.relative(ROOT, sourcePath),
    summary: '',
  };

  const output = [];
  let inCode = false;
  let inTable = false;
  let inAdmonition = false;
  let inExampleBlock = false;
  let admonitionType = '';
  let blockBuffer = [];
  let exampleBuffer = [];
  let pendingAdmonition = null;
  let pendingDefinition = null;
  const isGlossary = slug === 'glossary';

  for (let i = 0; i < lines.length; i += 1) {
    const raw = lines[i];
    const line = cleanLine(raw);

    if (line === '[role="summary"]') {
      const summaryLines = [];
      i += 1;
      while (i < lines.length && cleanLine(lines[i])) {
        summaryLines.push(cleanLine(lines[i]));
        i += 1;
      }
      metadata.summary = summaryLines.join(' ');
      continue;
    }

    if (/^\(\(\(.+\)\)\)$/.test(line) || line === '[glossary]') {
      continue;
    }

    if (line.startsWith('//')) {
      continue;
    }

    if (line === `[[${metadata.id}]]`) {
      continue;
    }

    if (/^\[\[[^\]]+\]\]$/.test(line)) {
      output.push(line.replace(/^\[\[([^\]]+)\]\]$/, '<a id="$1"></a>'));
      continue;
    }

    if (/^===\s+/.test(line) || /^==\s+/.test(line)) {
      continue;
    }

    if (/^\[(NOTE|TIP|WARNING|IMPORTANT|CAUTION)\]$/.test(line)) {
      pendingAdmonition = line.slice(1, -1).toLowerCase();
      continue;
    }

    if (pendingAdmonition && /^=+$/.test(line)) {
      inAdmonition = true;
      admonitionType = pendingAdmonition;
      pendingAdmonition = null;
      blockBuffer = [];
      continue;
    }

    if (!pendingAdmonition && /^=+$/.test(line)) {
      if (inExampleBlock) {
        output.push(...exampleBuffer.map((item) => (item ? `> ${convertInline(item, refMap, report, slug)}` : '>')));
        output.push('');
        inExampleBlock = false;
        exampleBuffer = [];
      } else {
        inExampleBlock = true;
        exampleBuffer = [];
      }
      continue;
    }

    if (inAdmonition) {
      if (/^=+$/.test(line)) {
        output.push(`:::${admonitionType}`);
        output.push(...blockBuffer.map((item) => convertInline(item, refMap, report, slug)));
        output.push(':::');
        output.push('');
        inAdmonition = false;
        admonitionType = '';
        blockBuffer = [];
      } else {
        blockBuffer.push(raw);
      }
      continue;
    }

    if (inExampleBlock) {
      exampleBuffer.push(raw);
      continue;
    }

    if (line === '----') {
      if (inCode) {
        output.push('```');
        output.push('');
        inCode = false;
      } else {
        output.push('```text');
        inCode = true;
      }
      continue;
    }

    if (inCode) {
      output.push(raw);
      continue;
    }

    if (line.startsWith('[width=') && isTableFence(cleanLine(lines[i + 1] ?? ''))) {
      continue;
    }

    if (isTableFence(line)) {
      if (inTable) {
        output.push(...tableToMarkdown(blockBuffer));
        output.push('');
        inTable = false;
        blockBuffer = [];
      } else {
        inTable = true;
      }
      continue;
    }

    if (inTable) {
      blockBuffer.push(raw);
      continue;
    }

    const anchoredDefinitionMatch = raw.match(/^\[\[([^\]]+)\]\]\s*(.+?)::\s*$/);
    const definitionMatch = raw.match(/^(.+?)::\s*$/);
    if (anchoredDefinitionMatch || definitionMatch) {
      if (pendingDefinition) {
        output.push(...convertDefinitionList(
          pendingDefinition.term,
          pendingDefinition.definition,
          pendingDefinition.anchor,
          slug,
          report,
          isGlossary,
          refMap
        ));
        output.push('');
      }

      pendingDefinition = anchoredDefinitionMatch
        ? {
            anchor: anchoredDefinitionMatch[1],
            term: anchoredDefinitionMatch[2],
            definition: [],
          }
        : {
            anchor: '',
            term: definitionMatch[1],
            definition: [],
          };
      continue;
    }

    if (pendingDefinition) {
      if (!line) {
        output.push(...convertDefinitionList(
          pendingDefinition.term,
          pendingDefinition.definition,
          pendingDefinition.anchor,
          slug,
          report,
          isGlossary,
          refMap
        ));
        output.push('');
        pendingDefinition = null;
        continue;
      }

      if (/^\[\[/.test(line) || /^={4,6}\s+/.test(line)) {
        output.push(...convertDefinitionList(
          pendingDefinition.term,
          pendingDefinition.definition,
          pendingDefinition.anchor,
          slug,
          report,
          isGlossary,
          refMap
        ));
        output.push('');
        pendingDefinition = null;
        i -= 1;
        continue;
      }

      pendingDefinition.definition.push(convertInline(line, refMap, report, slug));
      continue;
    }

    if (line === '+' || line === '--') {
      continue;
    }

    if (line.startsWith('image:images/')) {
      output.push(imageToMarkdown(line, report, slug, locale));
      output.push('');
      continue;
    }

    if (line.startsWith('video::')) {
      output.push(videoToHtml(line, report, slug));
      output.push('');
      continue;
    }

    if (/^={4,6}\s+/.test(line)) {
      output.push(headingToMarkdown(line));
      output.push('');
      continue;
    }

    if (/^\.\s+/.test(line)) {
      output.push(convertInline(line.replace(/^\.\s+/, '1. '), refMap, report, slug));
      continue;
    }

    if (/^\*\s+/.test(line)) {
      output.push(convertInline(line, refMap, report, slug));
      continue;
    }

    output.push(convertInline(raw, refMap, report, slug));
  }

  if (pendingDefinition) {
    output.push(...convertDefinitionList(
      pendingDefinition.term,
      pendingDefinition.definition,
      pendingDefinition.anchor,
      slug,
      report,
      isGlossary,
      refMap
    ));
    output.push('');
  }

  if (inExampleBlock && exampleBuffer.length > 0) {
    output.push(...exampleBuffer.map((item) => (item ? `> ${convertInline(item, refMap, report, slug)}` : '>')));
    output.push('');
  }

  const normalizedBodyLines = normalizeOrderedListBlocks(normalizeBodyLines(output));
  const { lines: wrappedLines } = wrapProcedureLists(normalizedBodyLines);
  // Output is plain Markdown, not MDX. The Astro <Steps> component and its
  // import are no longer used (see guide-i90), and without MDX there is nothing
  // that needs angle brackets escaped -- committed content keeps <hr> and
  // <Main navigation> literal. Stage 3 strips any <Steps> tags that survive.
  const bodyLines = wrappedLines;
  const extension = 'md';
  const alternateExtension = 'mdx';
  const importBlock = '';
  const finalContent = `${buildFrontmatter(metadata, locale)}${importBlock}<a id="${metadata.id}"></a>\n\n${bodyLines.join('\n')}\n`;
  await fs.rm(path.join(paths.docsDir, `${slug}.${alternateExtension}`), { force: true });
  await fs.writeFile(path.join(paths.docsDir, `${slug}.${extension}`), finalContent);
}

async function copyImages(paths) {
  await fs.mkdir(paths.publicImagesDir, { recursive: true });
  const sourceImagesDir = path.join(paths.sourceDir, 'images');
  try {
    await fs.cp(sourceImagesDir, paths.publicImagesDir, { recursive: true });
  } catch (error) {
    if (error && typeof error === 'object' && 'code' in error && error.code === 'ENOENT') {
      return;
    }
    throw error;
  }
}

async function convertLocale(locale) {
  const paths = buildPaths(locale);
  const topicSlugs = await loadGuideTopics(locale, paths.sourceDir);
  const refMap = await buildReferenceMap(locale, topicSlugs, paths.sourceDir);

  const report = {
    locale,
    converted: [],
    skipped: [],
    unresolvedReferences: [],
    unhandledBlocks: [],
  };

  await fs.mkdir(paths.docsDir, { recursive: true });
  await copyImages(paths);

  for (const slug of topicSlugs) {
    await convertTopic(slug, locale, refMap, report, paths);
    report.converted.push(slug);
  }

  await fs.mkdir(path.dirname(paths.reportFile), { recursive: true });
  await fs.writeFile(paths.reportFile, `${JSON.stringify(report, null, 2)}\n`);
  process.stdout.write(`Converted ${report.converted.length} ${locale} topics.\n`);
}

async function main() {
  const locale = process.argv[2];
  if (!locale) {
    throw new Error('Usage: node scripts/migrate/convert-locale.mjs <locale>');
  }

  await convertLocale(locale);
}

main().catch((error) => {
  process.stderr.write(`${error.stack ?? error}\n`);
  process.exitCode = 1;
});
