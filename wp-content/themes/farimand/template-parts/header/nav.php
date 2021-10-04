<?php
/**
 * Nav template
 * @package Farimand
 */


$menu_class = \FARIMAND_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class -> get_menu_id( 'farimand_header_menu' );
$header_menus = wp_get_nav_menu_items( $header_menu_id );

?>

<!-- NAVBAR STARTS HERE -->
<div class="container-fluid" >
    <div class="row" id="top-menu">
        <div class="col-sm-1 col-md-1 col-lg-1"></div>
        <div class="col-sm-1 col-md-1 col-lg-9">
            info@farimand.com &nbsp; &nbsp; | &nbsp; &nbsp; +93 (0) 797 68 99 33
        </div>
        <div class="col-sm-1 col-md-1 col-lg-2">
            <a href="#" class="top-menu-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="top-menu-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="top-menu-icon"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

    <!-- HEADER AND LOGO BANNER STARTS HERE -->
    <div class="row" id="top-banner">
        <div class="col-sm-12 col-md-6 col-lg-3" style="padding-left: 40px;">
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-9">
            BANNER
        </div>
    </div>

    <!-- TOP NAVBAR STARTS HERE -->
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light" id="nav">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                        if ( !empty( $header_menus ) && is_array( $header_menus ) ){
                        ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php
                            foreach ( $header_menus as $menu_item ) {
                                if ( !$menu_item -> menu_item_parent ){
                                    $child_menu_items = $menu_class -> get_child_menu_items( $header_menus, $menu_item -> ID );
                                    $has_children = !empty( $child_menu_items ) && is_array( $child_menu_items );
                                    if ( ! $has_children ){
                                        ?>
                                        <li class="nav-item">
                                            <a id="nav-links" class="nav-link" href="<?php echo esc_url( $menu_item -> url ); ?>">
                                                <?php
                                                    echo esc_html( $menu_item -> title );
                                                ?>
                                            </a>
                                        </li> <!-- SINGLE NAV ENDS HERE -->
                                        <?php
                                    }else{
                                        ?>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="<?php esc_url( $menu_item -> url ); ?>" id="nav-links" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <?php
                                                    echo esc_html( $menu_item -> title );
                                                ?>
                                            </a>
                                            <ul class="dropdown-menu border-0" aria-labelledby="navbarDropdown" id="drop-down">
                                                <li>
                                                    <?php
                                                        foreach ( $child_menu_items as $child_menu_item ){
                                                            ?>
                                                            <a id="drop-down-nav-links" class="dropdown-item" href="<?php echo esc_url( $child_menu_item -> url );?>">
                                                                <?php
                                                                    echo esc_html( $child_menu_item -> title );
                                                                ?>
                                                            </a>
                                                            <?php
                                                        }
                                                    ?>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php
                                    }
                            ?>


                        <?php
                                }
                            }
                        ?>
                    </ul>
                    <?php
                        }
                    ?>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search-input">
                        <button class="btn btn-outline" id="search-btn" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div> <!-- NAVE ROW ENDS HERE -->
</div> <!-- CONTAINER FLUID ENDS HERE -->



