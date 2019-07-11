<?php

add_filter('mcm_copyright_source', 'add_unsplash_source', 10, 2);

function add_unsplash_source($source, $post){

  if(
    strpos($post->post_name, 'unsplash') !== false
    || strpos($post->post_title, 'unsplash') !== false
  ){
    $source = 'Unsplash';
  }

  return $source;
}
