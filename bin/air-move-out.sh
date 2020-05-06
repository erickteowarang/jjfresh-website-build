#!/bin/bash
# A script for moving all dev files out of the theme for testing with Theme Check plugin

mkdir -p ~/air-temp
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/.DS_Store ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/.accessibilityrc ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/.git ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/.gitignore ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/.jshintignore ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/.travis.yml ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/package.json ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/package-lock.json ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/phpcs.xml ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/node_modules ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/.jscsrc ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/gulpfile.js ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/bin ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/content ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/__MACOSX ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/.scss-lint.yml ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/front-page.php ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/README.md ~/air-temp/
sudo rm ~/Projects/airdev/content/themes/jjfresh-website/.DS_Store
sudo rm ~/Projects/airdev/content/themes/jjfresh-website/js/.DS_Store
sudo rm ~/Projects/airdev/content/themes/jjfresh-website/sass/.DS_Store
sudo rm ~/Projects/airdev/content/themes/jjfresh-website/css/.DS_Store
sudo rm ~/Projects/airdev/content/themes/jjfresh-website/fonts/.DS_Store
sudo rm ~/Projects/airdev/content/themes/jjfresh-website/images/.DS_Store
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/.stylelintrc ~/air-temp/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/.editorconfig ~/air-temp/
mkdir -p ~/air-temp/template-parts
mkdir -p ~/air-temp/template-parts/header
mkdir -p ~/air-temp/template-parts/footer
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/template-parts/header/demo-content.php ~/air-temp/template-parts/header/
sudo mv ~/Projects/airdev/content/themes/jjfresh-website/template-parts/footer/demo-content.php ~/air-temp/template-parts/footer/

# Remove custom stuff that are not part of an official WordPress theme in WP theme directory
rm ~/Projects/airdev/content/themes/jjfresh-website/inc/includes/taxonomy.php
rm ~/Projects/airdev/content/themes/jjfresh-website/inc/includes/post-type.php

# Moving to bin dir
cd ~/air-temp/bin
