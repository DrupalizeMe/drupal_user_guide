#!/usr/bin/env bash
#
# Print the comma-separated locales to build for a merge request preview.
#
# Previews always include en and de. Any other locale is added when the merge
# request changes files under content/<locale>/. Building every locale is too
# large for a GitLab Pages preview deployment, so this keeps previews small
# while still showing the locales a merge request touches.
#
# A merge request that changes more than PREVIEW_MAX_EXTRA_LOCALES other
# locales (default 3) is a sweeping change, such as an upstream sync or a
# change to every locale's config, so it builds only the default locales.
#
# Uses GitLab's merge request CI variables to compare the merge request's
# source commit with its merge base. If the changed files can't be determined,
# it falls back to the default locales rather than failing the build.

set -euo pipefail

DEFAULT_LOCALES=(en de)
# Each built locale is roughly 13-20 MB, so this keeps previews under the limit.
MAX_EXTRA_LOCALES="${PREVIEW_MAX_EXTRA_LOCALES:-3}"

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT_DIR"

print_locales() {
  local IFS=,
  echo "$*"
}

fallback() {
  echo "preview_locales: $1; building default locales only." >&2
  print_locales "${DEFAULT_LOCALES[@]}"
  exit 0
}

base="${CI_MERGE_REQUEST_DIFF_BASE_SHA:-}"
# In merged results pipelines CI_COMMIT_SHA is the temporary merge commit, so
# prefer the merge request's own source commit when GitLab provides it.
head="${CI_MERGE_REQUEST_SOURCE_BRANCH_SHA:-${CI_COMMIT_SHA:-}}"

command -v git >/dev/null 2>&1 || fallback "git is not installed"
[[ -n "$base" && -n "$head" ]] || fallback "no merge request base and source commits"

# CI clones are shallow, so fetch whichever of the two commits is missing.
missing=()
for sha in "$base" "$head"; do
  git cat-file -e "$sha^{commit}" 2>/dev/null || missing+=("$sha")
done
if [[ ${#missing[@]} -gt 0 ]]; then
  git fetch --quiet --depth=1 origin "${missing[@]}" >&2 || fallback "could not fetch ${missing[*]}"
fi

changed="$(git diff --name-only --no-renames "$base" "$head")" || fallback "could not diff $base and $head"

extra=()
while IFS= read -r locale; do
  [[ -n "$locale" && -f "content/$locale/zensical.toml" ]] || continue
  [[ " ${DEFAULT_LOCALES[*]} " == *" $locale "* ]] && continue
  extra+=("$locale")
done < <(printf '%s\n' "$changed" | sed -n 's|^content/\([^/]*\)/.*|\1|p' | sort -u)

if [[ ${#extra[@]} -gt $MAX_EXTRA_LOCALES ]]; then
  fallback "merge request changes ${#extra[@]} other locales ($(print_locales "${extra[@]}")), more than the $MAX_EXTRA_LOCALES a preview can hold"
fi

print_locales "${DEFAULT_LOCALES[@]}" ${extra[@]+"${extra[@]}"}
