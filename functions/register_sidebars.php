<?php

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Header widget', 'textdomain' ),
		'id'            => 'sidebar-header',
		'description'   => __( 'Widget w pasku nawigacji strony. Domyślnie koszyk Woocommerce', 'textdomain' ),
		'before_widget' => '<div class="minikoszyk">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Opinions widget', 'textdomain' ),
		'id'            => 'sidebar-opinions',
		'description'   => __( 'Widget w stopce strony z opiniami google', 'textdomain' ),
		'before_widget' => '<div class="opinie-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );