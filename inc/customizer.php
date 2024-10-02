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

	$wp_customize->add_section('about_elizabeth_section', array(
		'title' => __('About Elizabeth', 'handp24'),
		'priority' => 30,
	));

	$wp_customize->add_section('the_boutique_section', array(
		'title' => __('The Boutique', 'handp24'),
		'priority' => 30,
	));

	$wp_customize->add_section('personalised_dresses_section', array(
		'title' => __('Personalised Dresses', 'handp24'),
		'priority' => 30,
	));

	$wp_customize->add_section('core_values_section', array(
		'title' => __('Core Values', 'handp24'),
		'priority' => 30,
	));

	$wp_customize->add_setting('elizabeth_image_1', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_setting('personalised_dress_1', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_setting('personalised_dress_2', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_setting('personalised_dress_3', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'personalised_dress_control_1', array(
		'label' => __('Select Image 1', 'maidens-and-ravens'),
		'section' => 'personalised_dresses_section',
		'settings' => 'personalised_dress_1',
	)));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'elizabeth_image_control_1', array(
		'label' => __('Select Image 1', 'maidens-and-ravens'),
		'section' => 'about_elizabeth_section',
		'settings' => 'elizabeth_image_1',
	)));

	$wp_customize->add_setting('elizabeth_image_2', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'elizabeth_image_control_2', array(
		'label' => __('Select Image 2', 'maidens-and-ravens'),
		'section' => 'about_elizabeth_section',
		'settings' => 'elizabeth_image_2',
	)));

	$wp_customize->add_setting('elizabeth_image_3', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'elizabeth_image_control_3', array(
		'label' => __('Select Image 3', 'maidens-and-ravens'),
		'section' => 'about_elizabeth_section',
		'settings' => 'elizabeth_image_3',
	)));

	$wp_customize->add_setting('elizabeth_image_4', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'elizabeth_image_control_4', array(
		'label' => __('Select Image 4', 'maidens-and-ravens'),
		'section' => 'about_elizabeth_section',
		'settings' => 'elizabeth_image_4',
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

	// Setting for Arch Image
	$wp_customize->add_setting('box_image', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'box_image_control', array(
		'label' => __('Select Box Image', 'handp24'),
		'section' => 'home_page_section',
		'settings' => 'box_image',
	)));

	$wp_customize->add_setting('boutique_image_1', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'boutique_image_control_1', array(
		'label' => __('Select Image 1', 'maidens-and-ravens'),
		'section' => 'the_boutique_section',
		'settings' => 'boutique_image_1',
	)));

	$wp_customize->add_setting('boutique_image_2', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'boutique_image_control_2', array(
		'label' => __('Select Image 2', 'maidens-and-ravens'),
		'section' => 'the_boutique_section',
		'settings' => 'boutique_image_2',
	)));

	$wp_customize->add_setting('boutique_image_3', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, ' boutique_image_control_3', array(
		'label' => __('Select Image 3', 'maidens-and-ravens'),
		'section' => 'the_boutique_section',
		'settings' => 'boutique_image_3',
	)));

	$wp_customize->add_setting('core_values_image_1', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, ' core_values_image_control_1', array(
		'label' => __('Select Image 1', 'maidens-and-ravens'),
		'section' => 'core_values_section',
		'settings' => 'core_values_image_1',
	)));

	$wp_customize->add_setting('core_values_image_2', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, ' core_values_image_control_2', array(
		'label' => __('Select Image 2', 'maidens-and-ravens'),
		'section' => 'core_values_section',
		'settings' => 'core_values_image_2',
	)));

	$wp_customize->add_setting('core_values_image_3', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, ' core_values_image_control_3', array(
		'label' => __('Select Image 3', 'maidens-and-ravens'),
		'section' => 'core_values_section',
		'settings' => 'core_values_image_3',
	)));

	$wp_customize->add_setting('core_values_image_4', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw', // Sanitize callback to ensure valid URL
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, ' core_values_image_control_4', array(
		'label' => __('Select Image 4', 'maidens-and-ravens'),
		'section' => 'core_values_section',
		'settings' => 'core_values_image_4',
	)));
}
add_action('customize_register', 'theme_customiser_settings');
