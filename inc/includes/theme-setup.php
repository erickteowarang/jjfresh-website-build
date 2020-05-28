<?php
/**
 * Theme setup
 *
 * @package jjfresh-website
 **/

namespace JJ_Fresh;

function theme_setup() {

  /**
   * Register menu locations
   */

  register_nav_menus( THEME_SETTINGS['menu_locations'] );

  /**
   * Load textdomain.
   */
  load_theme_textdomain( THEME_SETTINGS['textdomain'], get_template_directory() . '/languages' );

  /**
   * Define content width in articles
   */
  if ( ! isset( $content_width ) ) {
    $content_width = THEME_SETTINGS['content_width'];
  }

  // Run the rest of the setup
  build_theme_support();
  build_taxonomies();
  build_post_types();
}

/**
 * Build taxonomies
 */
function build_taxonomies() {
  if ( ! is_array( THEME_SETTINGS['taxonomies'] ) || ! THEME_SETTINGS['taxonomies'] ) {
    return;
  }

  foreach ( THEME_SETTINGS['taxonomies'] as $slug => $args ) {
    $classname = __NAMESPACE__ . '\\' . $args['name'];
    $file_path = get_theme_file_path( '/inc/taxonomies/' . $slug . '.php' );

    if ( ! file_exists( $file_path ) ) {
      return new \WP_Error( 'invalid-taxonomy', __( 'The taxonomy class file does not exist.', 'jjfresh-website' ), $classname );
    }
    require $file_path;

    if ( ! class_exists( $classname ) ) {
      return new \WP_Error( 'invalid-taxonomy', __( 'The taxonomy you attempting to create does not have a class to instance. Possible problems: your configuration does not match the class file name; the class file name does not exist.', 'jjfresh-website' ), $classname );
    }

    $taxonomy_class = new $classname( $slug );
    $taxonomy_class->register( $args['post_types'] );
  }
}

/**
 * Build custom post types
 */
function build_post_types() {
  if ( ! is_array( THEME_SETTINGS['post_types'] ) || ! THEME_SETTINGS['post_types'] ) {
    return;
  }

  foreach ( THEME_SETTINGS['post_types'] as $slug => $name ) {
    $classname = __NAMESPACE__ . '\\' . $name;
    $file_path = get_theme_file_path( '/inc/post-types/' . $slug . '.php' );

    if ( ! file_exists( $file_path ) ) {
      return new \WP_Error( 'invalid-taxonomy', __( 'The taxonomy class file does not exist.', 'jjfresh-website' ), $classname );
    }
    // Get the class file
    require $file_path;

    if ( ! class_exists( $classname ) ) {
      return new \WP_Error( 'invalid-taxonomy', __( 'The taxonomy you attempting to create does not have a class to instance. Possible problems: your configuration does not match the class file name; the class file name does not exist.', 'jjfresh-website' ), $classname );
    }

    $post_type_class = new $classname( $slug );
    $post_type_class->register();
  }
}

/**
 * Build theme support
 */
function build_theme_support() {
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support(
    'html5',
    [
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ]
  );
}
 
function jjfresh_add_register_form_field(){
 
	woocommerce_form_field(
		'first_name',
		array(
			'type'        => 'text',
			'required'    => true, // just adds an "*"
			'label'       => 'First name'
		),
		( isset($_POST['first_name']) ? $_POST['first_name'] : '' )
  );
  
  woocommerce_form_field(
		'last_name',
		array(
			'type'        => 'text',
			'label'       => 'Last name'
		),
		( isset($_POST['last_name']) ? $_POST['last_name'] : '' )
  );
 
}

function jjfresh_add_confirm_password_form_field() {
  woocommerce_form_field(
		'password2',
		array(
			'type'        => 'password',
			'required'    => true, // just adds an "*"
      'label'       => 'Confirm Password',
		),
		''
	);
}

function registration_errors_validation($reg_errors, $sanitized_user_login, $reg_email) {
	global $woocommerce;
	extract( $_POST );
	if ( strcmp( $password, $password2 ) !== 0 ) {
		return new \WP_Error( 'registration-error', __( 'Passwords do not match.', 'woocommerce' ) );
	}
	return $reg_errors;
}

function filter_valid_order_statuses_for_cancel( $statuses, $order = '' ){

  // Set HERE the order statuses where you want the cancel button to appear
  $custom_statuses    = array( 'pending', 'processing', 'on-hold', 'failed' );

  // Set HERE the delay (in days)
  $duration = 3; // 3 days

  // UPDATE: Get the order ID and the WC_Order object
  if( ! is_object( $order ) && isset($_GET['order_id']) )
      $order = wc_get_order( absint( $_GET['order_id'] ) );

  $delay = $duration*24*60*60; // (duration in seconds)
  $date_created_time  = strtotime($order->get_date_created()); // Creation date time stamp
  $date_modified_time = strtotime($order->get_date_modified()); // Modified date time stamp
  $now = strtotime("now"); // Now  time stamp

  // Using Creation date time stamp
  if ( ( $date_created_time + $delay ) >= $now ) return $custom_statuses;
  else return $statuses;
}