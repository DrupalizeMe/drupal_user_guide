#!/usr/bin/env bash
#
# Convert PNG screenshots to lossless WebP.
#
# The screenshot tooling (https://www.drupal.org/project/user_guide_tests)
# produces PNG files. Lossless WebP is roughly 60% smaller, which keeps the
# published site smaller.
#
# Usage:
#   scripts/convert-images-to-webp.sh            # all locales
#   scripts/convert-images-to-webp.sh en de      # specific locales
#
# For each content/<locale>/docs/images/*.png this writes a .webp next to it
# and removes the PNG. PNGs that can't be decoded are left in place. It does
# not change Markdown; pages should reference the .webp file names.

set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"

if ! command -v cwebp >/dev/null 2>&1; then
  echo "cwebp is required. Install it with 'brew install webp' or 'apt-get install webp'." >&2
  exit 1
fi

if [[ $# -gt 0 ]]; then
  locales=("$@")
else
  locales=()
  for dir in "$ROOT_DIR"/content/*/docs/images; do
    locales+=("$(basename "$(dirname "$(dirname "$dir")")")")
  done
fi

total=0
for locale in "${locales[@]}"; do
  images_dir="$ROOT_DIR/content/$locale/docs/images"
  if [[ ! -d "$images_dir" ]]; then
    echo "No images directory for locale '$locale': $images_dir" >&2
    exit 1
  fi

  count=0
  for png in "$images_dir"/*.png; do
    [[ -e "$png" ]] || continue
    webp="${png%.png}.webp"
    if cwebp -quiet -lossless -z 9 -mt "$png" -o "$webp"; then
      rm "$png"
      count=$((count + 1))
    else
      rm -f "$webp"
      echo "Skipping $png: cwebp could not convert it" >&2
    fi
  done

  echo "$locale: converted $count images"
  total=$((total + count))
done

echo "Converted $total images."
