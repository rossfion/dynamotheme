<?php
function dynamotheme_customize_register($wp_customize) {
	// Settings Section.
	$wp_customize->add_section('settings', array(
		'title' => __('Theme Settings', 'dynamotheme'),
		'description' => sprintf(__('Options for Dynamo theme', 'dynamotheme')),
		'priority' => 130,
	));
	
	// Preset Setting.
	$wp_customize->add_setting('preset', array(
		'default' => _x('dark', 'dynamotheme'),
		'type' => 'theme_mod',
	));
	
	// Preset Control.
	$wp_customize->add_control('preset', array(
	'type' => 'select',
		'label' => __('preset', 'dynamotheme'),
		'section' => 'settings',
		'choices' => array(
		'dark' => 'Dark',
		'light' => 'Light'
		),
		'priority' => 1,
	
	));
	
	// Color Setting.
	$wp_customize->add_setting('color', array(
		'default' => _x('#f9992b', 'dynamotheme'),
		'type' => 'theme_mod',
	));
	
	// Color Control.
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color', array(
		'label' => __('Theme Color', 'dynamotheme'),
		'section' => 'settings',
		'priority' => 2,
		))
	);
}
add_action('customize_register', 'dynamotheme_customize_register');
	