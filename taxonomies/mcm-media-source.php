<?php

/**
 * Registers the `mcm_media_source` taxonomy,
 * for use with 'attachment'.
 */
function mcm_media_source_init() {
	register_taxonomy( 'mcm-media-source', array( 'attachment' ), array(
		'hierarchical'      => true,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts',
		),
		'labels'            => array(
			'name'                       => __( 'Media Sources', 'media-copyright-manager' ),
			'singular_name'              => _x( 'Media Source', 'taxonomy general name', 'media-copyright-manager' ),
			'search_items'               => __( 'Search Mcm media sources', 'media-copyright-manager' ),
			'popular_items'              => __( 'Popular Mcm media sources', 'media-copyright-manager' ),
			'all_items'                  => __( 'All media sources', 'media-copyright-manager' ),
			'parent_item'                => __( 'Parent Mcm media source', 'media-copyright-manager' ),
			'parent_item_colon'          => __( 'Parent Mcm media source:', 'media-copyright-manager' ),
			'edit_item'                  => __( 'Edit Mcm media source', 'media-copyright-manager' ),
			'update_item'                => __( 'Update Mcm media source', 'media-copyright-manager' ),
			'view_item'                  => __( 'View Mcm media source', 'media-copyright-manager' ),
			'add_new_item'               => __( 'Add new media source', 'media-copyright-manager' ),
			'new_item_name'              => __( 'New Media Source', 'media-copyright-manager' ),
			'separate_items_with_commas' => __( 'Separate mcm media sources with commas', 'media-copyright-manager' ),
			'add_or_remove_items'        => __( 'Add or remove mcm media sources', 'media-copyright-manager' ),
			'choose_from_most_used'      => __( 'Choose from the most used mcm media sources', 'media-copyright-manager' ),
			'not_found'                  => __( 'No mcm media sources found.', 'media-copyright-manager' ),
			'no_terms'                   => __( 'No mcm media sources', 'media-copyright-manager' ),
			'menu_name'                  => __( 'Media Sources', 'media-copyright-manager' ),
			'items_list_navigation'      => __( 'Mcm media sources list navigation', 'media-copyright-manager' ),
			'items_list'                 => __( 'Mcm media sources list', 'media-copyright-manager' ),
			'most_used'                  => _x( 'Most Used', 'mcm-media-source', 'media-copyright-manager' ),
			'back_to_items'              => __( '&larr; Back to Mcm media sources', 'media-copyright-manager' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'mcm-media-source',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'mcm_media_source_init' );

/**
 * Sets the post updated messages for the `mcm_media_source` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `mcm_media_source` taxonomy.
 */
function mcm_media_source_updated_messages( $messages ) {

	$messages['mcm-media-source'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'Mcm media source added.', 'media-copyright-manager' ),
		2 => __( 'Mcm media source deleted.', 'media-copyright-manager' ),
		3 => __( 'Mcm media source updated.', 'media-copyright-manager' ),
		4 => __( 'Mcm media source not added.', 'media-copyright-manager' ),
		5 => __( 'Mcm media source not updated.', 'media-copyright-manager' ),
		6 => __( 'Mcm media sources deleted.', 'media-copyright-manager' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', 'mcm_media_source_updated_messages' );
