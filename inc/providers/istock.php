<?php

add_filter('mcm_copyright_source', 'add_istock_source', 10, 2);

function add_istock_source($source, $post){

  if(
    strpos( $post->post_name, 'istock') !== false
    || strpos( $post->post_title, 'istock') !== false
  ){
    $source = 'iStock';
  }

  return $source;
}
