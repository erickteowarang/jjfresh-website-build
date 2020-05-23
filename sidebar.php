<?php
/**
 * The sidebar containing the main widget area
 * Implement your custom sidebar to this file.
 * @package jjfresh-website
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace JJ_Fresh;

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
} ?>

<aside id="secondary" class="widget-area">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
