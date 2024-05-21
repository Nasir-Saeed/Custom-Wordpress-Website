<?php
/**
 * egowebsite Customizer.
 */
function egowebsite_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'egowebsite_settings', array(
		'title' => __('EGOwebsite Settings'),
		'description' => '', //Include html tags such as <p>.
		'priority' => 10, //Mixed with to-level-section hierarchy.
	) );

	$wp_customize->add_section( 'egowebsite_colors', array(
		'title' => 'Colors',
		'panel' => 'egowebsite_settings', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'egowebsite_labels', array(
		'title' => 'Labels',
		'panel' => 'egowebsite_settings', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'egowebsite_home_banner', array(
		'title' => 'Home Banner Setting',
		'panel' => 'egowebsite_settings', //ID of the panel this section berlongs to.
	) );

	$wp_customize->add_setting( 'egowebsite_nav_bg_color', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => '#2ca358',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( 'egowebsite_nav_bg_color', array(
		'label' => __( 'Menu Background' ),
		'type' => 'color',
		'section' => 'egowebsite_colors',
	) );

	$wp_customize->add_setting( 'egowebsite_body_bg_color', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => '#fff',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( 'egowebsite_body_bg_color', array(
		'label' => __( 'Body Background' ),
		'type' => 'color',
		'section' => 'egowebsite_colors',
	) );

	$wp_customize->add_setting( 'egowebsite_featured_block_1', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => 'Latest From Technology',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control( 'egowebsite_featured_block_1', array(
		'label' => __( 'Featured Box 1 Title' ),
		'type' => 'text',
		'section' => 'egowebsite_labels',
	) );
	$wp_customize->add_setting( 'egowebsite_home_banner_block_1', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => 'yes',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control( 'egowebsite_home_banner_block_1', array(
		'label' => __( 'Show/Hide Home Banner' ),
		'type' => 'radio',
		'section' => 'egowebsite_home_banner',
		'choices'=> array(
			'yes' => 'Yes',
			'no'=> 'No'
		),
	) );
	
}
add_action( 'customize_register', 'egowebsite_customize_register' );

