<?php

/**
 * Load scripts
 */
function load_scripts()
{
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);
	wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/02e4f40b20.js', array(), '3.7.1', true);
	wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/src/js/lib/bootstrap.bundle.min.js', array('jquery'), '5.3.x', true);
	wp_enqueue_script('owl', get_template_directory_uri() . '/dist/owl.carousel.min.js', array('jquery'), '2.3.4', true);
	wp_enqueue_script('app', get_template_directory_uri() . '/dist/build-combined.js', array('jquery'), '1.0', true);
	// wp_enqueue_script('main', get_template_directory_uri() . '/src/js/main.js', array('jquery'), '1.0', false);

	wp_localize_script( 'app', 'ajax', array(
    	'url' => admin_url( 'admin-ajax.php' )
	));
}
add_action('wp_footer', 'load_scripts');