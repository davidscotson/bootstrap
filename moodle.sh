#!/bin/sh
bundle exec jekyll build
cd _gh_pages;
find . -name '*.html' -exec sh -c 'mv "$0" "${0%.html}.php"' {} \;
cd ..
cp -r _gh_pages/docs ../Moodle/admin/tool/themetester/.
