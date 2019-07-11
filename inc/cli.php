<?php
if ( defined( 'WP_CLI' ) && WP_CLI ) {

  class MediaCopyrighManager {

      public function __construct() {


      }


      /**
       * Bulk assign all images to media source
       *
       *
       * @when before_wp_load
       */
      public function bulk_assign( $args, $assoc_args ) {



        $posts = get_posts( array(
          'post_type' => 'attachment',
          'posts_per_page' => -1,
          'tax_query' => array(
              array(
                  'taxonomy' => 'mcm-media-source',
                  'operator' => 'NOT EXISTS', // or 'EXISTS'
              ),
          ),
        ) );



        if ( $posts ) {
          $x = 0;
          foreach ($posts as $post) {
            // code...
            auto_assign_copyright($post->ID);
            $x++;
          }
          WP_CLI::success( $x . ' media files auto assigned' );

        } else {
          WP_CLI::success( 'no attachments found' );
        }


      }

  }

  WP_CLI::add_command( 'copyright-manager', 'MediaCopyrighManager' );


}
