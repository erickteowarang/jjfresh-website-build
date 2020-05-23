<?php
/**
 * A template base for modular content
 *
 * @package jjfresh-website
 */

namespace JJ_Fresh;

// Get the page id (can be something else than the page id)
$have_rows_id = get_modular_rows_id();

// check if there is modules.
if ( function_exists( 'have_rows' ) && \have_rows( 'modular_content', $have_rows_id ) ) :

  // loop modules.
  while ( \have_rows( 'modular_content', $have_rows_id ) ) : \the_row();

    the_module( $have_rows_id );

  endwhile;

endif;

