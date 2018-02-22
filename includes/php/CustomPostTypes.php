<?php

class CustomPostTypes {

	public static function init() {
		self::referenser();

	}

	private static function referenser() {
		$labels = array(
			'name'                => _x( 'Referenser', 'Post Type General Name', 'Censor' ),
			'singular_name'       => _x( 'Referens', 'Post Type Singular Name', 'Censor' ),
			'menu_name'           => __( 'Referenser', 'Censor' ),
			'parent_item_colon'   => __( 'Förälder', 'Censor' ),
			'all_items'           => __( 'Alla referenser', 'Censor' ),
			'view_item'           => __( 'Visa referenser', 'Censor' ),
			'add_new_item'        => __( 'Lägg till ny referens', 'Censor' ),
			'add_new'             => __( 'Lägg till ny referens', 'Censor' ),
			'edit_item'           => __( 'Redigera referens', 'Censor' ),
			'update_item'         => __( 'Uppdatera referens', 'Censor' ),
			'search_items'        => __( 'Sök ibland referenser', 'Censor' ),
			'not_found'           => __( 'Kunde ej hittas', 'Censor' ),
			'not_found_in_trash'  => __( 'Kunde ej hittas', 'Censor' ),
		);
		$args = array(
			'label'               => __( 'referenser', 'Censor' ),
			'description'         => __( 'Alla referenser', 'Censor' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
			'taxonomies'          => array(  ),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'menu_icon'			  => 'dashicons-groups'
		);
		register_post_type( 'referenser', $args );
	}


}