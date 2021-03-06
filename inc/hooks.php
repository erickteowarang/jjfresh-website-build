<?php
/**
 * All hooks that are run in the theme are listed here
 *
 * @package jjfresh-website
 */

namespace JJ_Fresh;

/**
 * General hooks
 */
require get_theme_file_path( 'inc/hooks/general.php' );
add_action( 'widgets_init', __NAMESPACE__ . '\widgets_init' );

/**
 * Scripts and styles associated hooks
 */
require get_theme_file_path( 'inc/hooks/scripts-styles.php' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_theme_scripts' );
add_action( 'wp_default_scripts', __NAMESPACE__ . '\move_jquery_into_footer' );

/**
 * Gutenberg associated hooks
 */
require get_theme_file_path( 'inc/hooks/gutenberg.php' );
add_filter( 'allowed_block_types', __NAMESPACE__ . '\allowed_block_types', 10, 2 );
add_filter( 'use_block_editor_for_post_type', __NAMESPACE__ . '\use_block_editor_for_post_type', 10, 2 );

/**
 * Woocommerce associated hooks
 */
add_action( 'woocommerce_register_form_start', __NAMESPACE__ . '\jjfresh_add_register_form_field');
add_filter( 'woocommerce_registration_errors', __NAMESPACE__ . '\registration_errors_validation', 10, 3);
add_action( 'woocommerce_register_form', __NAMESPACE__ . '\jjfresh_add_confirm_password_form_field');
add_filter( 'woocommerce_valid_order_statuses_for_cancel', __NAMESPACE__ . '\filter_valid_order_statuses_for_cancel', 20, 2 );