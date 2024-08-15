<?php
/**
 * maidens and ravens Theme Customizer
 *
 * @package maidens_and_ravens
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function maidens_and_ravens_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'maidens_and_ravens_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'maidens_and_ravens_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'maidens_and_ravens_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function maidens_and_ravens_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function maidens_and_ravens_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function maidens_and_ravens_customize_preview_js() {
	wp_enqueue_script( 'maidens-and-ravens-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'maidens_and_ravens_customize_preview_js' );

function theme_customiser_settings($wp_customize){
	$wp_customize->add_section('home_page_section', array(
		'title' => __('Home Page', 'handp24'),
		'priority' => 30,
	));

	// Setting for Hero Image 1
	$wp_customize->add_setting('hero_image_1', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image_control_1', array(
		'label' => __('Select Banner Image 1', 'handp24'),
		'section' => 'home_page_section',
		'settings' => 'hero_image_1',
	)));

	// Setting for Hero Image 2
	$wp_customize->add_setting('hero_image_2', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image_control_2', array(
		'label' => __('Select Banner Image 2', 'handp24'),
		'section' => 'home_page_section',
		'settings' => 'hero_image_2',
	)));

	// Setting for Arch Image
	$wp_customize->add_setting('arch_image', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'arch_image_control', array(
		'label' => __('Select Arch Image', 'handp24'),
		'section' => 'home_page_section',
		'settings' => 'arch_image',
	)));
}
add_action('customize_register', 'theme_customiser_settings');
