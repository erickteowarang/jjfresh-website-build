<?php
/**
 * The template for displaying front page
 *
 * Contains the closing of the #content div and all content after.
 * Initial styles for front page template.
 *
 * @package jjfresh-website
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace JJ_Fresh;

// Featured image.
$thumbnail = wp_get_attachment_url( get_post_thumbnail_id() ) ?: THEME_SETTINGS['default_featured_image'];

get_header(); 

?>

<div id="content" class="content-area">
  <main role="main" id="main" class="site-main">
    <div class="hero-block">

    </div>
    
    <div class="block">
      <div class="container">

        <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

          <?php endwhile; ?>

          <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

          <?php endif ?>

      </div>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
