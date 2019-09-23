<?php

function load_stylesheets()

{
        

        wp_register_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('style' , get_template_directory_uri() . '/style.css', array(), false, 'all');
        wp_enqueue_style('style');



}
add_action('wp_enqueue_scripts', 'load_stylesheets');

 

function loadjs(){

        wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js' , '',1,true);
        wp_enqueue_script('customjs');

        wp_register_script('bootstrapJS' , get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, 'all');
        wp_enqueue_script('bootstrapJS');


}
add_action('wp_enqueue_scripts','loadjs');



// Theme setup
function learningWordPress_setup() {
	
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));
	
	// Add featured image support
	add_theme_support('post-thumbnails');
 
	
	// Add post type support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'learningWordPress_setup');



// customize theme

function header_customize($wp_customize) {
	$wp_customize->add_section('header-custom-section', array(
		'title' => 'Header'

	));

	$wp_customize->add_setting('header-number', array(
		'default' => '+1234567890'
));

$wp_customize->add_control( new WP_Customize_Control($wp_customize,
'header-number-control', array(
	'label' => 'Number',
	'section' => 'header-custom-section',
	'settings' => 'header-number'

)));

$wp_customize->add_setting('header-email', array(
	'default' => 'mail@crazydomains.com'
));

$wp_customize->add_control( new WP_Customize_Control($wp_customize,
'header-email-control', array(
'label' => 'Email',
'section' => 'header-custom-section',
'settings' => 'header-email'

)));

}
add_action('customize_register', 'header_customize');