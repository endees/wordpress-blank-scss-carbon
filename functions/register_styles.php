<?php

/**
 * Load styles
 */
function load_styles() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/src/css/vendor/bootstrap.css', true, '5.3.x', 'all');
	wp_enqueue_style('owl', get_template_directory_uri() . '/src/css/vendor/owl.carousel.min.css', true, '2.3.4', 'all');
	wp_enqueue_style('owl-theme', get_template_directory_uri() . '/src/css/vendor/owl.theme.default.min.css', true, '2.3.4', 'all');
	wp_enqueue_style('app', get_template_directory_uri() . '/dist/build-style.css', true, '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_styles');