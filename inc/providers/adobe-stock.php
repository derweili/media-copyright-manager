<?php

add_filter('mcm_copyright_source', 'add_adobe_stock_source', 10, 2);

function add_adobe_stock_source($source, $post){

  if(
    strpos( $post->post_name, 'adobestock') !== false
    || strpos( $post->post_title, 'adobestock') !== false
    || strpos( get_post_meta($post->ID, '_wp_attached_file', true), 'AdobeStock') !== false
  ){
    $source = 'Adobe Stock';
  }


  return $source;
}
