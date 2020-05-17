<?php
/**
 * @package jjfresh-website
 * @Author: Niku Hietanen
 * @Date: 2020-02-18 15:06:45
 * @Last Modified by: Niku Hietanen
 * @Last Modified time: 2020-02-18 15:07:08
 **/

namespace JJ_Fresh

/**
 * Registers the Your Post Type post type.
 */
class Your_Post_Type extends Post_Type {

  public function register() {

    // Modify all the i18ized strings here.
    $generated_labels = [
      'menu_name'          => __( 'Your Post Type', 'jjfresh-website' ),
      'name'               => _x( 'Your Post Types', 'post type general name', 'jjfresh-website' ),
      'singular_name'      => _x( 'Your Post Type', 'post type singular name', 'jjfresh-website' ),
      'name_admin_bar'     => _x( 'Your Post Type', 'add new on admin bar', 'jjfresh-website' ),
      'add_new'            => _x( 'Add New', 'thing', 'jjfresh-website' ),
      'add_new_item'       => __( 'Add New Your Post Type', 'jjfresh-website' ),
      'new_item'           => __( 'New Your Post Type', 'jjfresh-website' ),
      'edit_item'          => __( 'Edit Your Post Type', 'jjfresh-website' ),
      'view_item'          => __( 'View Your Post Type', 'jjfresh-website' ),
      'all_items'          => __( 'All Your Post Types', 'jjfresh-website' ),
      'search_items'       => __( 'Search Your Post Types', 'jjfresh-website' ),
      'parent_item_colon'  => __( 'Parent Your Post Types:', 'jjfresh-website' ),
      'not_found'          => __( 'No your post types found.', 'jjfresh-website' ),
      'not_found_in_trash' => __( 'No your post types found in Trash.', 'jjfresh-website' ),
    ];

    // Definition of the post type arguments. For full list see:
    // http://codex.wordpress.org/Function_Reference/register_post_type
    $args = [
      'labels'              => $generated_labels,
      'description'         => '',
      'menu_icon'           => null,
      'rewrite'             => [
        'slug' => 'your-post-type',
      ],
      'supports'            => [ 'title', 'editor', 'thumbnail' ],
      'taxonomies'          => [],
      'show_in_menu'        => true,
      'public'              => false,
      'has_archive'         => false,
      'exclude_from_search' => false,
      'show_in_rest'        => false,
    ];

    $this->register_wp_post_type( $this->slug, $args );
  }
}
