<?php

add_action('add_attachment', 'auto_assign_copyright');

function auto_assign_copyright($post_id){

  $post = get_post($post_id);

  $terms = wp_get_post_terms( $post_id, 'mcm-media-source' );

  $source = $terms ? $terms[0]->name : null;

  $source = apply_filters('mcm_copyright_source', $source, $post);

  if($source){

    $source_term = get_term_by('name', $source, 'mcm-media-source');

    // if term was found, add term to post
    if( $source_term ){
      wp_set_post_terms( $post_id, $source_term->term_id, 'mcm-media-source', false );
    }else{

      // if term was not found, create term and add it to post
      $inserted_term = wp_insert_term( $source, 'mcm-media-source', $args = array() );
      wp_set_post_terms( $post_id, $inserted_term['term_id'], 'mcm-media-source', false );

    }


  }


  // do_action('mcm-assign-media', $post);

}
