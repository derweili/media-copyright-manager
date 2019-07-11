<?php

add_filter('mcm_copyright_source', 'add_shutterstock_source', 10, 2);

function add_shutterstock_source($source, $post){

  if(
    strpos( $post->post_name, 'shutterstock') !== false
    || strpos( $post->post_title, 'shutterstock') !== false
  ){
    $source = 'Shutterstock';
  }


  return $source;
}
