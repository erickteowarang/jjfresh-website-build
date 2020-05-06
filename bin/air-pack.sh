#!/bin/bash
# A script that makes a package for WordPress Theme Directory

mkdir -p ~/Projects
mkdir -p ~/Projects/airdev
mkdir -p ~/Projects/airdev/content
mkdir -p ~/Projects/airdev/content/themes
rm ~/Projects/airdev/content/themes/jjfresh-website.zip
sh ~/Projects/airdev/content/themes/jjfresh-website/bin/air-move-out.sh
cd ~/Projects/airdev/content/themes/
zip -r jjfresh-website.zip jjfresh-website
sh ~/Projects/airdev/content/themes/jjfresh-website/bin/air-move-in.sh
