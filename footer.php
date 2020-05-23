<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package jjfresh-website
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace JJ_Fresh;

?>

	</div><!-- #content -->

	<footer role="contentinfo" id="colophon" class="site-footer">

    <?php get_template_part( 'template-parts/footer/footer-content' ); ?>

    <a href="#page" class="js-trigger top" data-mt-duration="300"><span class="screen-reader-text"><?php echo esc_html_e( 'Back to top', 'jjfresh-website' ); ?></span><?php include get_theme_file_path( '/svg/chevron-up.svg' ); ?></a>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
