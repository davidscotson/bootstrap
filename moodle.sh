#!/bin/sh
bundle exec jekyll build
find _gh_pages/ -name '*.html' -exec sh -c 'mv "$0" "${0%.html}.php"' {} \;
cp -r _gh_pages/ ../moodle-tool_themetester/docs/4.0.0-alpha.4/
# cp -r assets ../moodle-tool_themetester/.
