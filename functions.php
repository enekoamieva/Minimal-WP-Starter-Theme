<?php

// Add WordPress Features
add_action('after_setup_theme', 'minimal_wp_st');
function minimal_wp_st() {
    // Add Featured Image
    add_theme_support('post-thumbnails');
    // Switch default core markup for search form, comment form, and comments to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    // Add types format to post
/*     add_theme_support('post-formats', array (
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat'
    )); */

    // Suport to RSS
    add_theme_support( 'automatic-feed-links');

    //Títulos SEO
    add_theme_support( 'title-tag' );

    //Custom Logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ));


    /***** Gutenberg Support *****/

    // Add support for editor styles.
    add_theme_support( 'editor-styles' );

    // Enqueue editor styles.
    add_editor_style( '/inc/gutenberg-style-editor.css' );

    // Adds support for block alignments.
    add_theme_support( 'align-wide' );

    // Make media embeds responsive.
    add_theme_support( 'responsive-embeds' );

    // Editor Font Styles
    add_theme_support( 'editor-font-sizes', array(
		array(
			'name'      => __( 'Small', 'minimal_wp_st' ),
			'shortName' => __( 'S', 'minimal_wp_st' ),
			'size'      => 12,
			'slug'      => 'small',
		),
		array(
			'name'      => __( 'Normal', 'minimal_wp_st' ),
			'shortName' => __( 'M', 'minimal_wp_st' ),
			'size'      => 16,
			'slug'      => 'normal',
		),
		array(
			'name'      => __( 'Large', 'minimal_wp_st' ),
			'shortName' => __( 'L', 'minimal_wp_st' ),
			'size'      => 20,
			'slug'      => 'large',
		),
		array(
			'name'      => __( 'Larger', 'minimal_wp_st' ),
			'shortName' => __( 'XL', 'minimal_wp_st' ),
			'size'      => 24,
			'slug'      => 'larger',
		)
    ));


    // Adds support for editor color palette.
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => __( 'Light gray', 'minimal_wp_st' ),
            'slug'  => 'light-gray',
            'color' => '#f5f5f5',
        ),
        array(
            'name'  => __( 'Primary', 'minimal_wp_st' ),
            'slug'  => 'primary',
            'color' => '#ee8572',
        ),
        array(
            'name'  => __( 'Dark gray', 'minimal_wp_st' ),
            'slug'  => 'dark-gray',
            'color' => '#34393e',
        )
    ));

    // Adds support for editor color palette.
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => __( 'Light gray', 'minimal_wp_st' ),
            'slug'  => 'light-gray',
            'color' => '#f5f5f5',
        ),
        array(
            'name'  => __( 'Primary', 'minimal_wp_st' ),
            'slug'  => 'primary',
            'color' => '#ee8572',
        ),
        array(
            'name'  => __( 'Dark gray', 'minimal_wp_st' ),
            'slug'  => 'dark-gray',
            'color' => '#34393e',
        )
    ));

}


// Enqueue Scripts & Styles
add_action( 'wp_enqueue_scripts', 'minimal_wp_st_scripts_styles' );
function minimal_wp_st_scripts_styles()
{    
    //Theme Styles
    wp_enqueue_style( 'minimal_wp_st_styles', get_stylesheet_uri(), array('minimal_wp_st_googlefonts'), '1.0.0', 'all');
    //JS Menu Overlay
    wp_enqueue_script( 'minimal_wp_st_overlaymenu', get_stylesheet_directory_uri() . '/js/overlay-menu.js', array('jquery'), '1.0.0' );
    
    //Google Fonts
    wp_enqueue_style( 'minimal_wp_st_googlefonts', 'https://fonts.googleapis.com/css?family=Material+Icons|Source+Sans+Pro:400,700', array(), 'all');

}


// Register Menu
add_action('init', 'minimal_wp_st_nav_menus');
function minimal_wp_st_nav_menus()
{
    $args = array(
        'main_menu'         => __( 'Menu Principal', 'minimal_wp_st' ),
        'social_menu'       => __( 'Menu Social Footer', 'minimal_wp_st' ),
        'responsive_menu'   => __( 'Menu Responsive', 'minimal_wp_st' )
    );

    register_nav_menus($args);
}

// Register Widget Areas
add_action( 'widgets_init', 'minimal_wp_st_register_sidebar' );
function minimal_wp_st_register_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Left Footer', 'minimal_wp_st' ),
        'description'   => __( 'Widget footer Izquierda' , 'minimal_wp_st' ),
        'id'            => 'left-footer',
        'before_widget' => '<section id="%1$s" class="%2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

    register_sidebar( array(
        'name'          => __( 'Right Footer', 'minimal_wp_st' ),
        'description'   => __( 'Widget footer derecha' , 'minimal_wp_st' ),
        'id'            => 'right-footer',
        'before_widget' => '<section id="%1$s" class="%2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

    register_sidebar( array(
        'name'          => __( 'Center Footer', 'minimal_wp_st' ),
        'description'   => __( 'Widget footer centro' , 'minimal_wp_st' ),
        'id'            => 'center-footer',
        'before_widget' => '<section id="%1$s" class="%2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

    register_sidebar( array(
        'name'          => __( 'Right Sidebar', 'minimal_wp_st' ),
        'description'   => __( 'Sidebar derecha' , 'minimal_wp_st' ),
        'id'            => 'right',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));


}


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/* //Add placeholder in fields comments
add_filter( 'comment_form_default_fields', 'minimal_wp_st_comment_form_fields' );
function minimal_wp_st_comment_form_fields( $fields ) {

	foreach($fields as &$field) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Nombre*"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Email*"', $field );
		$field = str_replace( 'id="url"', 'id="url" placeholder="Tu sitio web*"', $field );
	}

	return $fields;
}

add_filter( 'comment_form_defaults', 'minimal_wp_st_comment_form_field_textarea' );
function minimal_wp_st_comment_form_field_textarea( $args ) {

	$args['comment_field'] = str_replace( 'textarea', 'textarea placeholder="Escribe tu comentario*"', $args['comment_field'] );
	return $args;
} */