<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JJ_Fresh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class( 'no-js' ); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jjfresh-website' ); ?></a>
    <?php if( get_field('banner_image') ): ?>
    
    <header id="masthead" class="site-header <?php if ( is_front_page() ) : ?>home-banner<?php endif; ?> page-banner" 
      role="banner" 
      style="background: url(<?php the_field('banner_image'); ?>); 
          background-size: cover; 
          background-position: center center;"
    >
    
    <?php else: ?>

    <header id="masthead" class="site-header dark-theme" role="banner">
  
    <?php endif; ?>
      <div class="nav-container <?php if ( is_front_page() ) : ?>homepage-nav-container<?php endif; ?>">
        <?php get_template_part( 'template-parts/header/branding' ); ?>

        <?php get_template_part( 'template-parts/header/navigation' ); ?>
      </div>
      
      <?php if (get_field('banner_title')) : ?>

      <div class="container container-wide">
        <div class="banner-content <?php if ( is_front_page() ) : ?>homepage-banner<?php endif; ?>">
          <div class="tagline"><?php the_field('banner_tagline'); ?></div>
          <h1><?php the_field('banner_title'); ?></h1>
          <?php if(get_field('banner_link') ) : ?>
            <a href="<?php the_field('banner_link'); ?>" class="btn btn-ghost btn-banner"><?php the_field('banner_btn_text'); ?></a>
          <?php endif; ?>
          <div class="subtitle"><?php the_field('banner_subtitle'); ?></div>
        </div>
      </div>
      
      <?php endif; ?>
    </header>

  <div class="site-content">
