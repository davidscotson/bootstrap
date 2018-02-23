#!/bin/sh
bundle exec jekyll build
find _gh_pages/docs/ -name '*.html' -exec sh -c 'mv "$0" "${0%.html}.php"' {} \;
cp -r _gh_pages/docs ../moodle-tool_themetester/.
cp -r assets ../moodle-tool_themetester/.
