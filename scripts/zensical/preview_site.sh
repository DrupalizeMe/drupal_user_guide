#!/usr/bin/env bash

set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
BUILD_SCRIPT="$ROOT_DIR/scripts/zensical/build_site.py"
BUILD_OUTPUT="$ROOT_DIR/build/zensical/site-build/assembled"
VENV_PYTHON="$ROOT_DIR/.venv/bin/python"

PORT=8000
LOCALES=""

usage() {
  cat <<'EOF'
Usage: scripts/zensical/preview_site.sh [--port PORT] [--locales en,de]

Build the assembled multi-locale site and serve it locally with Python's
static file server.
EOF
}

while [[ $# -gt 0 ]]; do
  case "$1" in
    --port)
      PORT="$2"
      shift 2
      ;;
    --locales)
      LOCALES="$2"
      shift 2
      ;;
    -h|--help)
      usage
      exit 0
      ;;
    *)
      echo "Unknown argument: $1" >&2
      usage >&2
      exit 1
      ;;
  esac
done

if [[ ! -x "$VENV_PYTHON" ]]; then
  echo "Missing $VENV_PYTHON. Create .venv and install requirements.txt first." >&2
  exit 1
fi

BUILD_ARGS=()
if [[ -n "$LOCALES" ]]; then
  BUILD_ARGS+=(--locales "$LOCALES")
fi

if [[ ${#BUILD_ARGS[@]} -gt 0 ]]; then
  "$VENV_PYTHON" "$BUILD_SCRIPT" "${BUILD_ARGS[@]}"
else
  "$VENV_PYTHON" "$BUILD_SCRIPT"
fi

echo
echo "Preview ready."
echo "Serving $BUILD_OUTPUT"
echo "Base URL: http://localhost:${PORT}/"

if [[ -n "$LOCALES" ]]; then
  IFS=',' read -r -a locale_list <<< "$LOCALES"
  for locale in "${locale_list[@]}"; do
    locale="${locale//[[:space:]]/}"
    [[ -n "$locale" ]] && echo "Locale URL: http://localhost:${PORT}/${locale}/"
  done
else
  echo "Open a locale root such as: http://localhost:${PORT}/en/"
fi

echo
echo "Press Ctrl+C to stop the preview server."
cd "$BUILD_OUTPUT"
exec python3 -m http.server "$PORT"
