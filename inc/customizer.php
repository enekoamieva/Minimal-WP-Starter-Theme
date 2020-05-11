<?php
/**
 * Minimal WP Starter Theme Theme Customizer
 *
 * @package Minimal WP Starter Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function minimal_wp_st_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )			->transport	= 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )		->transport	= 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )	->transport	= 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'minimal_wp_st_customize_partial_blogname',
		) );

		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'minimal_wp_st_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'minimal_wp_st_customize_register' );

/**
 * Devuelve en tiempo real lo que se esta escribiendo en el titulo
 */
function minimal_wp_st_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Devuelve en tiempo real lo que se esta escribiendo en la descripcion
 */
function minimal_wp_st_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function minimal_wp_st_customize_preview_js() {
	wp_enqueue_script( 'minimal_wp_st-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'minimal_wp_st_customize_preview_js' );
