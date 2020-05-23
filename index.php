<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package jjfresh-website
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace JJ_Fresh;

get_header();

?>

<div id="content" class="content-area">
  <main role="main" id="main" class="site-main">
    <div class="container">

      <?php if ( have_posts() ) : ?>

        <?php if ( is_home() && ! is_front_page() ) : ?>

          <header>
            <h1 class="entry-title screen-reader-text">
              <?php single_post_title(); ?>
            </h1>
          </header>

        <?php endif; ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', get_post_type() ); ?>

          <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

      <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

    </div><!-- .container -->
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
