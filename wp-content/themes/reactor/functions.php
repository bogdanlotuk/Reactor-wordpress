<?php

add_action( 'wp_enqueue_scripts', 'reactor_style' );
add_action( 'wp_enqueue_scripts', 'reactor_scripts' );

function reactor_style() {
    wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function reactor_scripts() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
}