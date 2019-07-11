<?php

add_filter('mcm_copyright_source', 'add_flaticon_connect_source', 10, 2);

function add_flaticon_connect_source($source, $post){

  // check if we are on a rest api request
  if ( ! defined('REST_REQUEST')) return $source;

  global $wp;

  // check if request uri (rest endpoint) contains instant images
  if(
    strpos( $wp->request, 'flaticon') !== false
  ){
    $source = 'Flaticon'; // instant images only supports unsplash, so add unsplash as source
  }

  return $source;
}
