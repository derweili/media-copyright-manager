<?php

add_filter('mcm_copyright_source', 'add_pexels_source', 10, 2);

function add_pexels_source($source, $post){

  if(
    strpos( $post->post_name, 'pexels') !== false
    || strpos( $post->post_title, 'pexels') !== false
  ){
    $source = 'Pexels';
  }

  return $source;
}
