<?php
/**
* The template for display single post
*
* @package Minimal WP Starter Theme
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">

    <?php if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content-single', get_post_type() ); ?>
        
            <?php endwhile; ?>
    <?php endif; ?>

</div> <!-- .content-area -->

<?php comments_template(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>