<?php
/**
 * The template for displaying 404 pages (not found)
 * @package jjfresh-website
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

namespace JJ_Fresh;

get_header();

?>

<div id="content" class="content-area">
	<main role="main" id="main" class="site-main">
		<div class="container">

			<section class="error-404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'jjfresh-website' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'jjfresh-website' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
