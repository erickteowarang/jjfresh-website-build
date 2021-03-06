<?php
/**
 * Default hero template file.
 *
 * This is the default hero image for page templates, called
 * 'block'.
 *
 * @package jjfresh-website
 */

// Block settings
$block_class = is_front_page() ? ' block-front' : ' block-' . get_post_type();

// Featured image
$featured_image = has_post_thumbnail() ? wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) : THEME_SETTINGS['default_featured_image'];
?>

<section class="block block-hero<?php echo esc_attr( $block_class ); ?>" style="background-image: url('<?php echo esc_url( $featured_image ); ?>');">
  <div class="shade"></div>
</section>
