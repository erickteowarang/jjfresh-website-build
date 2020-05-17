<?php
/**
 * Site branding & logo
 *
 * @package jjfresh-website
 */

namespace JJ_Fresh

?>

      <div class="site-branding">

        <?php if ( is_front_page() && is_home() ) : ?>

        <h1 class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
            <?php include get_theme_file_path( THEME_SETTINGS['logo'] ); ?>
          </a>
        </h1>

        <?php else : ?>

          <p class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
              <?php include get_theme_file_path( THEME_SETTINGS['logo'] ); ?>
            </a>
          </p>

        <?php endif;

        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : ?>

          <p class="site-description screen-reader-text"><?php echo $description; // phpcs:ignore ?></p>

        <?php endif; ?>

      </div><!-- .site-branding -->
