<?php

// /**
//  * Register user session
//  */
// function registerSession()
// {
// 	if (!session_id()) {
// 		session_start();
// 	}
// }
// add_action('init', 'registerSession');

/**
 * Hide private pages from nav menu
 */
function wp_nav_menu_hide_private_pages ($items, $args) {
    foreach ($items as $ix => $obj) {
        if (!is_user_logged_in () && 'private' == get_post_status ($obj->object_id)) {
            unset ($items[$ix]);
        }
    }
    return $items;
}
add_filter ('wp_nav_menu_objects', 'wp_nav_menu_hide_private_pages', 10, 2); 

function custom_display_single_product() {
    if (is_singular('product')) {
        wc_get_template_part('content', 'single-product');
    }
}
add_action('woocommerce_before_single_product', 'custom_display_single_product');
