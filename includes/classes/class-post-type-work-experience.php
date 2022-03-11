<?php
/**
 * Creates a custom post type: Work Experience
 *
 * @package mikaeleriksson
 */

class Post_Type_Work_Experience extends Loader {
	/**
	 * Add hooks and filters here.
	 *
	 * @return void
	 */
	public function init() : void {
		add_action( 'init', [ $this, 'register_post_type' ] );
	}

	/**
	 * Registers the post type.
	 *
	 * @return void
	 */
	public function register_post_type() : void {
		$singular_name = _x( 'Work Experience', 'post type singular name', 'mikaeleriksson' );
		$plural_name   = _x( 'Work Experiences', 'post type plural name', 'mikaeleriksson' );
		$labels        = [
			'name'               => $plural_name,
			'singular_name'      => $singular_name,
			'add_new'            => _x( 'Add new', 'work experience', 'mikaeleriksson' ),
			// translators: post type singular name
			'add_new_item'       => sprintf( __( 'Add new %s', 'mikaeleriksson' ), $singular_name ),
			// translators: post type singular name
			'edit_item'          => sprintf( __( 'Edit %s', 'mikaeleriksson' ), $singular_name ),
			// translators: post type singular name
			'new_item'           => sprintf( __( 'New %s', 'mikaeleriksson' ), $singular_name ),
			// translators: post type singular name
			'view_item'          => sprintf( __( 'View %s', 'mikaeleriksson' ), $singular_name ),
			// translators: post type plural name
			'view_items'         => sprintf( __( 'View %s', 'mikaeleriksson' ), $plural_name ),
			// translators: post type plural name
			'search_items'       => sprintf( __( 'Search %s', 'mikaeleriksson' ), $plural_name ),
			// translators: post type plural name
			'not_found'          => sprintf( __( 'No %s found', 'mikaeleriksson' ), $plural_name ),
			// translators: post type plural name
			'not_found_in_trash' => sprintf( __( 'No %s found in trash', 'mikaeleriksson' ), $plural_name ),
			// translators: post type plural name
			'all_items'          => sprintf( __( 'All %s', 'mikaeleriksson' ), $plural_name ),
			// translators: post type singular name
			'archives'           => sprintf( __( '%s archives', 'mikaeleriksson' ), $singular_name ),
			// translators: post type singular name
			'attributes'         => sprintf( __( '%s attributes', 'mikaeleriksson' ), $singular_name ),
		];
		$args          = [
			'name'              => __( 'Work Experiences', 'mikaeleriksson' ),
			'labels'            => $labels,
			'public'            => true,
			'show_ui'           => true,
			'show_in_menu'      => true,
			'show_in_nav_menu'  => true,
			'show_in_admin_bar' => true,
			'show_in_rest'      => true,
			'menu_position'     => 10,
			'menu_icon'         => 'dashicons-portfolio',
			'supports'          => [ 'title' ],
			'has_archive'       => true,
			'delete_with_user'  => false,
		];
		register_post_type( 'work-experience', $args );
	}
}
