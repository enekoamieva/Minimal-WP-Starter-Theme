<?php
/**
* Template Part Pagination Post
*
 * @package Minimal WP Starter Theme
*/
?>

<?php if( get_next_post_link() || get_preview_post_link() ): ?>

    <div class="pagination">
        <nav>
            <?php 
                $args = array(
                    'prev_text' => __( 'Anteriores', 'minimal_wp_st' ),
                    'next_text' => __( 'Siguientes', 'minimal_wp_st' ),
                );

                echo paginate_links( $args );
            ?>
        </nav>
    </div> <!-- .pagination -->

<?php endif; ?>