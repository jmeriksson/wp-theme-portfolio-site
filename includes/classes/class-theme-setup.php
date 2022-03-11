<?php
/**
 * Handles the basic setup of the theme.
 *
 * @package mikaeleriksson
 */

class Theme_Setup extends Loader {
	/**
	 * Add hooks and filters here.
	 *
	 * @return void
	 */
	public function init() : void {
		add_action( 'init', [ $this, 'register_menus' ] );
		add_action( 'after_setup_theme', [ $this, 'theme_supports' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'add_theme_scripts_and_styles' ] );
		add_action( 'init', [ $this, 'add_options_page' ] );
		add_filter( 'upload_mimes', [ $this, 'allow_svg_uploads' ] );
	}

	/**
	 * Registers theme menues.
	 *
	 * @return void
	 */
	public function register_menus() : void {
		register_nav_menus(
			[
				'primary' => __( 'Primary Menu', 'mikaeleriksson' ),
			]
		);
	}

	/**
	 * Handles adding theme supports.
	 *
	 * @return void
	 */
	public function theme_supports() {
		add_theme_support( 'post-thumbnails' );
	}

	/**
	 * Handles theme scripts and styles.
	 *
	 * @return void
	 */
	public function add_theme_scripts_and_styles() : void {
		$style_modified  = gmdate( 'YmdHi', filemtime( get_template_directory() . '/assets/css/main.css' ) );
		$script_modified = gmdate( 'YmdHi', filemtime( get_template_directory() . '/assets/javascript/main.js' ) );

		// Enqueue the theme style.css file
		wp_enqueue_style( 'style', get_stylesheet_uri(), [], '1.0' );

		// Enqueue main styles from assets directory
		wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', [], $style_modified );

		// Enqueue main scripts from assets directory
		wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/javascript/main.js', [ 'jquery' ], $script_modified, true );
	}

	/**
	 * Adds an ACF options page.
	 *
	 * @return void
	 */
	public function add_options_page() {
		if ( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_page();
		}
	}

	/**
	 * Filter for allowing SVG uploads.
	 *
	 * @param Array $mime_types
	 * @return Array $mime_types filtered
	 */
	public function allow_svg_uploads( $mime_types ) {
		$mime_types['svg'] = 'image/svg+xml';
		return $mime_types;
	}
}
