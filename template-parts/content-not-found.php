<?php
/**
* Template Part Content Search
*
 * @package Minimal WP Starter Theme
*/
?>

<article class="post" id="post-<?php the_ID(); ?>">
    <header class="entry-header">
        <h5><?php esc_html_e( 'No se ha encontrado lo que buscabas, prueba a buscar otra vez', 'minimal_wp_st' ); ?></h5>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php get_search_form(); ?>
    </div><!-- .entry-content -->

</article><!-- .post -->