<?php
/**
 * Entry content template
 * To be used inside WordPress the loop
 *
 * @package Farimand
 */
?>

<div class="entry-content">
    <?php
        if ( is_single() ) {
            the_content(
                sprintf(
                    wp_kses(
                        __( 'Continue reading &s <span class="meta-nav">&rarr;</span>', 'farimand' ),
                        [
                            'span' => [
                                'class' => []
                            ]
                        ]
                    ),
                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                )
            );

            wp_link_pages(
                [
                    'before' => '<div class="page-links"> ' . esc_html__( 'Pages:', 'farimand' ),
                    'after' => '</div>',
                ]
            );

        } else {
            farimand_the_excerpt();
            echo farimand_excerpt_more();
        }


    ?>
</div>
