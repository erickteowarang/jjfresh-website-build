<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package jjfresh-website
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace JJ_Fresh;

the_post();

get_header();

?>

<div id="content" class="content-area">
  <main role="main" id="main" class="site-main">
    <div class="container">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">

          <?php the_content(); ?>

          <?php wp_link_pages( [
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jjfresh-website' ),
            'after'  => '</div>',
          ] ); ?>

        </div><!-- .entry-content -->

      </article><!-- #post-## -->

      <?php // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      } ?>

    </div><!-- .container -->
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
