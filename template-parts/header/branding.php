<?php
/**
 * Site branding & logo
 *
 * @package jjfresh-website
 */

namespace JJ_Fresh;
 
?>

      <div class="site-branding">
        <p class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
            <img class="white-logo" alt="JJFresh White Logo" src="<?php bloginfo('template_url'); ?>/images/jjfresh-white.png">
            <img class="blue-logo" alt="JJFresh Green Logo" src="<?php bloginfo('template_url'); ?>/images/jjfresh-green.png">
            <img class="sticky-logo" alt="JJFresh Green Logo" src="<?php bloginfo('template_url'); ?>/images/jjfresh-green.png">
          </a>
        </p>

        <?php

        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : ?>

          <p class="site-description screen-reader-text"><?php echo $description; // phpcs:ignore ?></p>

        <?php endif; ?>

      </div><!-- .site-branding -->
