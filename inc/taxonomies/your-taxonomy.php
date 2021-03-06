<?php
/**
 * @package jjfresh-website
 */

namespace JJ_Fresh;

/**
 * Registers the Your Taxonomy taxonomy.
 *
 * @param Array $post_types Optional. Post types in
 * which the taxonomy should be registered.
 */
class Your_Taxonomy extends Taxonomy {


  public function register( array $post_types = [] ) {
    // Taxonomy labels.
    $labels = [
      'name'                  => _x( 'Your Taxonomies', 'Taxonomy plural name', 'jjfresh-website' ),
      'singular_name'         => _x( 'Your Taxonomy', 'Taxonomy singular name', 'jjfresh-website' ),
      'search_items'          => __( 'Search Your Taxonomies', 'jjfresh-website' ),
      'popular_items'         => __( 'Popular Your Taxonomies', 'jjfresh-website' ),
      'all_items'             => __( 'All Your Taxonomies', 'jjfresh-website' ),
      'parent_item'           => __( 'Parent Your Taxonomy', 'jjfresh-website' ),
      'parent_item_colon'     => __( 'Parent Your Taxonomy', 'jjfresh-website' ),
      'edit_item'             => __( 'Edit Your Taxonomy', 'jjfresh-website' ),
      'update_item'           => __( 'Update Your Taxonomy', 'jjfresh-website' ),
      'add_new_item'          => __( 'Add New Your Taxonomy', 'jjfresh-website' ),
      'new_item_name'         => __( 'New Your Taxonomy', 'jjfresh-website' ),
      'add_or_remove_items'   => __( 'Add or remove Your Taxonomies', 'jjfresh-website' ),
      'choose_from_most_used' => __( 'Choose from most used Taxonomies', 'jjfresh-website' ),
      'menu_name'             => __( 'Your Taxonomy', 'jjfresh-website' ),
    ];

    $args = [
      'labels'            => $labels,
      'public'            => false,
      'show_in_nav_menus' => true,
      'show_admin_column' => true,
      'hierarchical'      => true,
      'show_tagcloud'     => false,
      'show_ui'           => true,
      'query_var'         => false,
      'rewrite'           => [
        'slug' => 'your-taxonomy',
      ],
    ];

    $this->register_wp_taxonomy( $this->slug, $post_types, $args );
  }

}
