import { execFile } from 'node:child_process';
import { promisify } from 'node:util';

const execFileAsync = promisify(execFile);
const locales = [
  'en',
  'ca',
  'de',
  'es',
  'fa',
  'fr',
  'hu',
  'hy',
  'id',
  'ja',
  'pt-br',
  'ru',
  'uk',
  'zh-hans',
];

for (const locale of locales) {
  process.stdout.write(`Converting ${locale}...\n`);
  const { stdout, stderr } = await execFileAsync('node', ['scripts/migrate/convert-locale.mjs', locale], {
    cwd: process.cwd(),
  });
  if (stdout) {
    process.stdout.write(stdout);
  }
  if (stderr) {
    process.stderr.write(stderr);
  }
}
