<?php

/**
* Autoload for PHP Composer and definition of the ABSPATH
*/

//defining the absolute path for the wordpress instalation.
if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/');

//including composer autoload
//require ABSPATH."vendor/autoload.php";

/**
 * enqueue scripts and styles
 */
function load_styles() {
    
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap-4.2/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style('bootstrap-css');
    
    wp_register_style( 'green-form-style', get_template_directory_uri() . '/css/green-form.css', array(), false, 'all' );
    wp_enqueue_style('green-form-style');
        
   // wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap-4.2/js/bootstrap-min.js', array(), '1.0.0', true );
   // wp_enqueue_script( 'green-form-script', get_template_directory_uri() . '/js/green-form.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_styles' );

function load_scripts() {
    
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap-4.2/js/bootstrap.min.js', array(), 1.0, true );
    wp_enqueue_script('bootstrap-js');
    
    wp_register_script( 'jquery-js', get_template_directory_uri() . '/js/jquery3-3.js', array(), 1.0, true );
    wp_enqueue_script('jquery-js');
    
    wp_register_script( 'green-form-scripts', get_template_directory_uri() . '/js/green-form.js', array(), 1.0, true );
    wp_enqueue_script('green-form-scripts');
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );