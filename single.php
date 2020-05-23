<?php
/**
 * The template for displaying all single posts
 * @package jjfresh-website
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

namespace JJ_Fresh;

the_post();

get_header();

?>

<div id="content" class="content-area">
	<main role="main" id="main" class="site-main">
    <div class="container container-article">

      <?php get_template_part( 'template-parts/content', get_post_type() ); ?>

			<?php the_post_navigation(); ?>

    </div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
