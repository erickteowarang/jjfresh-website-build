<?php
/**
 * General hooks.
 *
 * @package jjfresh-website
 * @Author: Niku Hietanen
 * @Date: 2020-02-20 13:46:50
 * @Last Modified by: Niku Hietanen
 * @Last Modified time: 2020-02-20 13:48:02
 */

namespace JJ_Fresh

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'jjfresh-website' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'jjfresh-website' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
} // end widgets_init
