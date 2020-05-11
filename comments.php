<?php
/**
* The template for displaying comments
*
 * @package Minimal WP Starter Theme
*/
?>

<aside id="comments" class="comments-area">
    <?php if( have_comments() ): ?>
        <h3 class="comments-title">
            <?php
                $minimal_wp_st_comment_count = get_comments_number();

                if ( '1' === $minimal_wp_st_comment_count ) {
                    printf(
                        /* translators: 1: title. */
                        esc_html__( 'Un comentario en &ldquo;%1$s&rdquo;', 'minimal_wp_st' ),
                        '<span>' . get_the_title() . '</span>'
                    );
                } else {
                    printf( // WPCS: XSS OK.
                        /* translators: 1: comment count number, 2: title. */
                        esc_html( _nx( '%1$s comentarios en &ldquo;%2$s&rdquo;', '%1$s comentarios en &ldquo;%2$s&rdquo;', $minimal_wp_st_comment_count, 'comments title', 'minimal_wp_st' ) ),
                        number_format_i18n( $minimal_wp_st_comment_count ),
                        '<span>' . get_the_title() . '</span>'
                    );
                }
			?>
        </h3>

        <ol class="comments-list">
            <?php wp_list_comments(); ?>
        </ol>

    <?php endif; ?>

    <?php comment_form(); ?>

</aside>