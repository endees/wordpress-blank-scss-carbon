<?php

// function post_trainer()  {
//     $labels = array(
//       'name' => _x('Trenerzy', 'Trenerzy', 'badek_theme'),
// 	  'singular_name' => _x('Trener', 'Trener', 'badek_theme'),
// 	  'add_new'               => _x( 'Dodaj nowego trenera', 'badek_theme' ),
// 	  'add_new_item'          => _x( 'Dodaj nowego trenera', 'badek_theme' ),
// 	  'new_item'              => _x( 'Dodaj nowego trenera', 'badek_theme' ),
// 	  'edit_item'             => _x( 'Edytuj trenera', 'badek_theme' ),
// 	  'view_item'             => _x( 'Zobacz trenera', 'badek_theme' ),
// 	  'all_items'             => _x( 'Wszyscy trenerzy', 'badek_theme' ),
// 	  'search_items'          => _x( 'Szukaj trenera', 'badek_theme' ),
//     );
//     $args = array(
//       'label' => __('Trenerzy', 'badek_theme'),
//       'labels' => $labels,
//       'supports' => array('title'),
//       'public' => true,
//       'show_ui' => true,
//       'show_in_menu' => true,
//       'menu_position' =>5,
//       'show_in_admin_bar' => true,
//       'show_in_nav_menus' => true,
//       'can_export' => true,
//       'has_archive' => false,
//       'exclude_from_search' => false,
//       'publicly_queryable' => true,
//       'capability_type' => 'page',
//       'query_var' => true,
//       'rewrite' => array('slug' => 'trenerzy'),
//     );
// 	register_post_type('trainer', $args);
// }
// add_action('init', 'post_trainer');