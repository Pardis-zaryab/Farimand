<?php
/**
 * Register menus
 *
 * @package Farimand
 */

namespace FARIMAND_THEME\Inc;

use FARIMAND_THEME\Inc\Traits\Singleton;

class Menus {
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
        add_action( 'init', [ $this, 'register_menus' ] );
    }

    public function register_menus()
    {
        register_nav_menus([
            'farimand_header_menu' => esc_html__( 'Header Menu', 'farimand' ),
            'farimand_footer_menu'  => esc_html__( 'Footer Menu', 'farimand' ),
        ]);
    }

    public function get_menu_id ( $location )
    {
        $locations = get_nav_menu_locations();
        $menu_id = $locations[ $location ];

        return !empty( $menu_id ) ? $menu_id : '';

//        echo '<pre>';
//        print_r($menu_id);
//        wp_die();

    }

    public function get_child_menu_items( $menu_array, $parent_id )
    {
        $child_menus = [];

        if ( !empty( $menu_array ) && is_array( $menu_array ) )
        {
            foreach ( $menu_array as $menu )
            {
                if ( intval( $menu -> menu_item_parent ) === $parent_id )
                {
                    array_push( $child_menus, $menu );
                }
            }
        }
        return $child_menus;
    }


}
