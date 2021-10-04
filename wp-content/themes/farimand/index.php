<?php
/**
 * Theme template Farimand
 * @package Farimand
 */

get_header();
?>

<!-- CONTENT STARTS HERE -->
<div id="primary">
    <main id="main" class="site-main mt-3" role="main">
        <?php
            if ( have_posts() ){
            ?>
                <div class="container-fluid">
                    <!-- BREADCRAMB STARTS HERE -->
                    <?php
                    if ( is_home() && ! is_front_page() ){
                        ?>
                        <header class="mb-5" id="post-title">
                            <h6 class="page-title screen-reader-text">
                                <?php
                                single_post_title();
                                ?>
                            </h6>
                        </header>
                        <?php
                    }
                    ?>

                    <!-- BREADCRAMB ENDS HERE -->


                    <?php
                        while ( have_posts() ) : the_post();
                        ?>
                        <div class="row mb-3">
                            <div class="col-sm-12 col-md-6 col-lg-9"> <!-- LEFTSIDE POST CONTENT STARTS HERE -->
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        get_template_part( '/template-parts/content' );
                                        ?>
                                    </div>
                                    <div class="card-footer">
                                        <i class="fal fa-thumbs-up" style="margin: 5px;"></i>
                                        <i class="fal fa-heart" style="margin: 5px;"></i>
                                        <i class="fal fa-comment" style="margin: 5px;"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-3"> <!-- RIGHT SIDEBAR STARTS HERE -->

                            </div>
                        </div>
                        <?php
                        endwhile;
                    ?>
                </div>
                <?php
            }
        ?>
    </main>
</div>

<?php
get_footer();
?>