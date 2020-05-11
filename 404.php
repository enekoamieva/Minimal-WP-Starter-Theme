<?php
/**
* The template for display error 404
*
 * @package Minimal WP Starter Theme
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">

    <div class="entry-header">
        <h1 class="entry-title"><?php esc_html_e( 'Error 404. No se ha encontrado lo que buscas', 'minimal_wp_st' ); ?></h1>
        <p><?php esc_html_e( 'Este el típico error 404 en el que mi web no ha encontrado lo que buscas. Puedes buscar lo que necesites a través de este formulario', 'minimal_wp_st' ) ?></p>
    </div> <!-- .entry-header-->

    <div class="entry-content">
        <?php get_search_form(); ?>
    </div><!-- .content-area -->


</div> <!-- .content-area -->

<?php get_footer(); ?>