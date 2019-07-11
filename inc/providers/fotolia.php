<?php

add_filter('mcm_copyright_source', 'add_fotolia_source', 10, 2);

function add_fotolia_source($source, $post){

  if(
    strpos( $post->post_name, 'fotolia') !== false
    || strpos( $post->post_title, 'fotolia') !== false
  ){
    $source = 'Fotolia';
  }


  return $source;
}
