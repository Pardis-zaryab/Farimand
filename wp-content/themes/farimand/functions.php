<?php
/**
 * Theme functions
 * @package Farimand
 */


//echo '<pre>';
//print_r( filemtime( get_template_directory() . '/style.css' ) );
//wp_die();

if ( !defined( 'FARIMAND_DIR_PATH' ))
{
    define( 'FARIMAND_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( !defined( 'FARIMAND_DIR_URI' ) )
{
    define( 'FARIMAND_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once FARIMAND_DIR_PATH . '/inc/helpers/autoloader.php';
require_once FARIMAND_DIR_PATH . '/inc/helpers/template-tags.php';

function farimand_get_theme_instance()
{
    \FARIMAND_THEME\Inc\FARIMAND_THEME::get_instance();
}

farimand_get_theme_instance();


function farimand_enqueue_scripts(){




}

add_action( 'wp_enqueue_scripts', 'farimand_enqueue_scripts' );

?>