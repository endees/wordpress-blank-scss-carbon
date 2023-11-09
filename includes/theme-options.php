<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    /**
     * Opcje motywu
     */
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );


    /**
     * Strona główna
     */
    Container::make( 'post_meta', 'Custom Data' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( get_template_directory(  ) . '/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}
