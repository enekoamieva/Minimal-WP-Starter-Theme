<?php
/**
* The template for display the search
*
 * @package Minimal WP Starter Theme
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <header class="entry-header">
        <h1 class="entry-title"><?php esc_attr_e( 'Resultados de la búsqueda:', 'minimal_wp_st' ); ?></h1>
    </header><!-- .entry-header -->

    <section class="posts-wrapper">

        <?php if ( have_posts() ) :
        
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content-search', get_post_type() );
        
            endwhile; ?>
                
            <?php else: {
            get_template_part( 'template-parts/content-not-found', get_post_type() );
        } ?>

        <?php endif; ?>

    </section> <!-- .posts-wrapper -->

    <!-- Pagination Nav -->
    <?php get_template_part( 'template-parts/pagination', get_post_type() ); ?>

</div> <!-- .content-area -->

<?php get_footer(); ?>