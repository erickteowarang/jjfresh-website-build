## JJ Fresh - A WordPress site for selling groceries

## Theme structure

We try to achieve as classic WordPress theme structure as possible to make it possible for wider audience to use and understand and to go with official WordPress Theme Coding Standards.

```shell
theme
├── 404.php                         # → Default "not found" page
├── archive.php                     # → Default archive template
├── bin/                            # → Scripts
│   ├── air-move-in.sh              # → A script for moving all dev files back to the theme
│   ├── air-move-out.sh              # → A script for moving all dev files out of the theme for testing with Theme Check plugin
│   ├── air-pack.sh                  # → A script that makes a package for WordPress Theme Directory
│   ├── newtheme.sh                  # → The start script for creating YOUR own theme out of jjfresh-website
├── comments.php                    # → Default comments template (can be deleted if not needed)
├── css/                            # → CSS files for production (never edit)
│   ├── global.css                  # → Unminified, stylefmtd CSS file
│   └── global.min.css              # → Minified theme CSS, this file is called in functions.php
├── fonts/                          # → Your webfont files
├── footer.php                      # → Site footer
├── front-page.php                  # → Demo front-page template (not included in wordpress.org version)
├── functions.php                   # → Set up your theme basic settings
├── gulpfile.js                     # → Gulpfile for jjfresh-website development
├── header.php                      # → Site header
├── images/                         # → Your theme images, for example default featured images and placeholders
├── inc/                            # → Theme core PHP
│   ├── hooks/                      # → Hook functions
│   ├── includes/                   # → Non-template features
│   ├── template-tags/              # → Template functions and helpers
│   ├── post-types/                 # → Custom Post Types
│   ├── taxonomies/                 # → Custom Taxonomies
│   ├── hooks.php                   # → All hooks the theme runs are here
│   ├── includes.php                # → Include non-template features
│   ├── template-tags.php           # → Include template functions and helpers
├── js/                             # → JavaScript files for production (never edit)
│   ├── all.js                      # → Obfuscated, concatted, minified file that contains all site JS
│   ├── src/                        # → JavaScript files for development
│   │   ├── lazyload.js             # → Script that lazyloads images to img or background (from 4.7.1)
│   │   ├── navigation.js           # → Accessible multi-level navigation (from 3.4.5)
│   │   ├── scripts.js              # → Theme core JavaScript file (from 1.0.0)
│   │   ├── skip-link-focus-fix.js  # → Skip link fix from _s
│   │   └── sticky-nav.js           # → Sticky nav functionality (optional)based themes
├── node_modules/                   # → Node.js packages (never edit)
├── package.json                    # → Node.js dependencies and scripts
├── page.php                        # → Default page template
├── phpcs.xml                       # → PHPCodeSniffer/WordPress Theme Coding Standards settings
├── sass/                           # → CSS files for development
│   ├── base/                       # → Theme base styles
│   │   ├── _accessibility.scss     # → Accessibility
│   │   ├── _config.scss            # → Theme config: Colors, fonts, etc.
│   │   ├── _helpers.scss           # → Mostly SASS mixins
│   │   ├── _normalize.scss         # → Browser reset
│   │   └── global.scss             # → Core CSS file that calls all the modular files
│   ├── extra/                      # → Extra, optional styles
│   │   ├── _slick.scss.            # → Base styles for slick carousel
│   │   └── _sticky-nav.scss        # → Sticky top navigation styles
│   ├── features/                   # → Fuctionality styles
│   │   ├── _breadcrumbs.scss       # → Styles for breadcrumb trail WordPress plugin
│   │   ├── _gallery.scss           # → Default WordPress gallery feature styles
│   │   ├── _lazyload.scss          # → Styles for air-helper lazyload feature (lazyload.js needed)
│   │   ├── _magnific-popup.scss    # → Defaults for magnific popup
│   │   └── _top.scss               # → Back to top styles
│   ├── layout/                     # → Fuctionality styles
│   │   ├── _forms.scss             # → Styles for general forms and Gravity Forms
│   │   ├── _sidebar.scss           # → Sidebar (optional)
│   │   ├── _site-footer.scss       # → Footer styles
│   │   ├── _site-header.scss       # → Header styles
│   │   ├── _typography.scss        # → Defaults for typography and fonts
│   │   └── _woocommerce.scss       # → WooCommerce webshop styles (optional)
│   ├── navigation/                 # → Navigation styles
│   │   ├── _burger.scss            # → Burger styles and animations
│   │   ├── _nav-core.scss.         # → Styles for both desktop and mobile navigation
│   │   ├── _nav-desktop.scss       # → Desktop navigation styles and dropdowns
│   │   └── _nav-mobile.scss        # → Navigation styles for mobile and touch devices
│   ├── views/                      # → Templates, archives, pages and views go here
│   │   ├── _blog.scss              # → General blog archive and post styles
│   │   ├── _comments.scss          # → Comment styles (optional)
│   │   ├── _front-page.scss        # → Front page styles (demo content, optional)
│   │   └── _page.scss              # → Default single page styles
├── screenshot.png                  # → Theme screenshot for WP admin
├── search.php                      # → Default search view
├── sidebar.php                     # → Default sidebar (optional)
├── single.php                      # → Default single article or CPT view
├── style.css                       # → Theme meta information
├── svg/                            # → Your theme SVG graphics and icons
├── template-parts/                 # → WordPress template parts. Modules go under this folder.
│   ├── header/                     # → Header modules
│   │   ├── branding.php            # → Site branding
│   │   ├── navigation.php          # → Site navigation
│   ├── content-none.php            # → Default content (from _s, can be deleted/modified)
│   ├── content-search.php          # → Default content (from _s, can be deleted/modified)
│   ├── content.php                 # → Default content (from _s, can be deleted/modified)
│   ├── hero.php                    # → Default hero
```

### Recommendations for development

* Mac OS X
* [Devpackages](https://github.com/digitoimistodude/devpackages) - Npm, Gulp and Bower
* [Dudestack](https://github.com/digitoimistodude/dudestack) - A toolkit for creating a new professional WordPress project with deployments. Heavily based on Bedrock by Roots.

### Installation

Traditional way:

1. Git clone or download zip
2. Open Terminal and run `npm install`
3. Run `gulp watch` and start coding
