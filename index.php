<?php
/**
* The Main Template
*
 * @package Minimal WP Starter Theme
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <section class="posts-wrapper">

    <?php if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content-main', get_post_type() ); ?>
        
            <?php endwhile; ?>
    <?php endif; ?>

    </section> <!-- .posts-wrapper -->

    <!-- Pagination Nav -->
    <?php get_template_part( 'template-parts/pagination', get_post_type() ); ?>

</div> <!-- .content-area -->

<?php get_footer(); ?>