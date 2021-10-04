<?php
/**
 * Entry header template
 *
 * @package Farimand
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );
$heading_class = ! empty( $hide_title ) && 'yes' === $hide_title ? 'hide' : '';

?>

<header class="entry-header">
    <?php
        // Display featured image
        if ( $has_post_thumbnail ){
            ?>
            <div class="entry-image mb-3">
                <a href="<?php esc_url( get_permalink() ); ?>">
                    <?php
                        the_post_custom_thumbnail(
                            $the_post_id,
                            'featured-thumbnail',
                            [
                                'size' => '( max-width: 955px ) 955px, 250px',
                                'class' => 'attachment-featured-thumbnail size-featured-image'
                            ]
                        );
                    ?>
                </a>
            </div>
            <?php
        }

        if ( is_single() || is_page() ) {
            printf(
              '<h5 class="page-title text-dark %1$s">%2$s</h5>',
                esc_attr( $heading_class ),
                wp_kses_post( get_the_title() )
            );
        } else {
            printf(
                '<h6 class="entry-title mb-3 %1$s"><a href="%1$s" class="title-links">%2$s</a></h6>',
                esc_url( get_permalink() ),
                wp_kses_post( get_the_title() )
            );
        }
    ?>
</header>
