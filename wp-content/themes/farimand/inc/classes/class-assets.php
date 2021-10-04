<?php
/**
 * Enqueue them assets
 *
 * @package Farimand
 */

namespace FARIMAND_THEME\Inc;

use FARIMAND_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

    protected function __construct()
    {
        // Load classes
        $this -> setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions.
         */
        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
    }

    public function register_styles()
    {
        // REGISTER STYLES
        wp_register_style( 'stylesheet', get_stylesheet_uri(), [], filemtime( FARIMAND_DIR_PATH . '/style.css' ), 'all' );
        wp_register_style( 'bootstrap-css', FARIMAND_DIR_URI . '/assets/src/lib/css/bootstrap.min.css', [], false, 'all');
        wp_register_style( 'bootstrap-rtl-css', FARIMAND_DIR_URI . '/assets/src/lib/css/bootstrap-rtl.min.css', [], false, 'all');
        wp_register_style( 'fontawesome-css', FARIMAND_DIR_URI . '/assets/src/lib/css/all.min.css', [], false, 'all');

        // ENQUEUE STYLE
        wp_enqueue_style('stylesheet');
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('bootstrap-rtl-css');
        wp_enqueue_style('fontawesome-css');
    }

    public function register_scripts()
    {
        // REGISTER SCRIPT
        wp_register_script( 'main-js', FARIMAND_DIR_URI . '/assets/src/lib/js/main.js', [], filemtime( FARIMAND_DIR_PATH . '/assets/src/lib/js/main.js' ), true );
        wp_register_script( 'bootstrap-js', FARIMAND_DIR_URI . '/assets/src/lib/js/bootstrap.bundle.min.js', [ 'jquery' ], false, true );
        wp_register_script( 'fontawesome-js', FARIMAND_DIR_URI . '/assets/src/lib/js/all.min.js', [], false, true );

        // ENQUEUE SCRIPT
        wp_enqueue_script('main.js');
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('fontawesome-js');
    }
}
