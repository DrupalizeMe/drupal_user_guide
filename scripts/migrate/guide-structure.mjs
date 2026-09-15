import fs from 'node:fs/promises';
import path from 'node:path';

import { guideStructure } from './guide-structure/index.mjs';

export function getGuide(locale) {
  const guide = guideStructure[locale];
  if (!guide) {
    throw new Error(`No guide structure found for locale "${locale}"`);
  }
  return guide;
}

export async function loadGuideTopics(locale, sourceDir) {
  const guide = getGuide(locale);
  const seen = new Set();
  const items = [];
  const missing = [];

  for (const chapter of guide.chapters) {
    for (const item of chapter.items) {
      if (seen.has(item)) continue;
      seen.add(item);
      // The guide structure in guide-structure/<locale>.mjs is committed data,
      // not derived from guide.asciidoc, so it goes stale when a topic is
      // deleted upstream. Skip rather than crash, but say so loudly -- the
      // locale's nav in content/<locale>/zensical.toml needs the same edit.
      try {
        await fs.access(path.join(sourceDir, `${item}.asciidoc`));
        items.push(item);
      } catch {
        missing.push(item);
      }
    }
  }

  if (missing.length > 0) {
    process.stderr.write(
      `WARNING: ${locale}: guide structure lists ${missing.length} topic(s) with no source file: ` +
        `${missing.join(', ')}\n` +
        `         Remove them from scripts/migrate/guide-structure/${locale}.mjs, from\n` +
        `         content/${locale}/zensical.toml, and delete the stale content/${locale}/docs/*.md.\n`
    );
  }

  const extraEntries = await fs.readdir(sourceDir, { withFileTypes: true });
  for (const entry of extraEntries) {
    if (!entry.isFile() || !entry.name.endsWith('.asciidoc')) continue;
    const slug = entry.name.replace(/\.asciidoc$/, '');
    if (slug === 'guide' || slug === 'guide-docinfo') continue;
    if (!seen.has(slug)) {
      seen.add(slug);
      items.push(slug);
    }
  }

  return items;
}

export async function buildReferenceMap(locale, topicSlugs, sourceDir) {
  const guide = getGuide(locale);
  const map = new Map();

  for (const chapter of guide.chapters) {
    // Every locale's landing page carries chapter anchors, so chapter
    // references resolve the same way in all of them.
    map.set(chapter.id, `./index.md#${chapter.id}`);
    map.set(`chapter:${chapter.id}`, `./index.md#${chapter.id}`);
  }

  for (const slug of topicSlugs) {
    const sourcePath = path.join(sourceDir, `${slug}.asciidoc`);
    const content = await fs.readFile(sourcePath, 'utf8');
    const anchors = [...content.matchAll(/\[\[([^\]]+)\]\]/g)].map((match) => match[1]);
    if (anchors.length === 0) continue;

    map.set(anchors[0], `./${slug}.md`);
    for (const anchor of anchors.slice(1)) {
      map.set(anchor, `./${slug}.md#${anchor}`);
    }
  }

  return map;
}
