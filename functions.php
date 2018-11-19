<?php

/* ---------------------------------------------------------------------------------------------
   THEME SETUP
   --------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'Moy_setup' ) ) {

	function Moy_setup() {

		// Automatic feed
		add_theme_support( 'automatic-feed-links' );

		// Set content-width
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 600;
		}

		// Post thumbnails
		add_theme_support( 'post-thumbnails' );

		// Set post thumbnail size
		set_post_thumbnail_size( 870, 9999 );

		// Custom Image Sizes
		add_image_size( 'Moy_fullscreen', 1860, 9999 );

		// Custom logo
		add_theme_support( 'custom-logo', array(
			'height'      => 300,
			'width'       => 600,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		// Post formats
		add_theme_support( 'post-formats', array( 'gallery' ) );

		// Declare WooCommerce support
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		// Title tag
		add_theme_support( 'title-tag' );

				//add CSS
        add_editor_style('/assets/plugins/magnific-popup/magnific-popup.css');
        add_editor_style('/assets/plugins/rs-plugin-5/css/settings.css');
        add_editor_style('/assets/plugins/rs-plugin-5/css/layers.css');
        add_editor_style('/assets/plugins/rs-plugin-5/css/navigation.css');
        add_editor_style('/assets/css/animations.css');
        add_editor_style('/assets/plugins/slick/slick.css');
        add_editor_style('/assets/css/style.css');
        add_editor_style('/assets/css/typography-default.css');
        add_editor_style('/assets/css/skins/MoyBlue.css');
        add_editor_style('/assets/css/custom.css');

		// Add nav menu
		register_nav_menu( 'primary-menu', __( 'Primary Menu', 'Moy' ) );
		register_nav_menu( 'header-menu', __( 'Header Menu', 'Moy-header' ) );

		// Add excerpts to pages
		add_post_type_support( 'page', array( 'excerpt' ) );

		// HTML5 semantic markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Make the theme translation ready
		load_theme_textdomain( 'Moy', get_template_directory() . '/languages' );
		
		
		wp_enqueue_style( 'Moy-style', get_template_directory_uri() . '/style.css', $dependencies );

	}
	add_action( 'after_setup_theme', 'Moy_setup' );

	function wmpudev_enqueue_icon_stylesheet() {
		wp_register_style( 'fontawesome', 'https:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'fontawesome');
	}
	add_action( 'wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet' );

    add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
    function clear_nav_menu_item_class($classes, $item, $args) {
        if ( 'primary-menu' === $args->theme_location ) {
            array_push($classes, "nav-item");
        }
        return $classes;
    }

    function add_specific_menu_location_atts( $atts, $item, $args ) {
        if( 'primary-menu' === $args->theme_location ) {
            $atts['class'] = 'nav-link';
        }
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

} // End if().


class Child_Wrap extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}