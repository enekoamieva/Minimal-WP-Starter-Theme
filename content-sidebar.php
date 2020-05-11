<?php
/**
*  Content-Sidebar Template
*  Template Name: Content-Sidebar Layout
*  Template Post Type: post, page
*  @package Minimal WP Starter Theme
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-sidebar">

    <?php if ( have_posts() ) : 
            while ( have_posts() ) : the_post();

                //Check if the content is page or single post
                if ( is_page() ):
                    get_template_part( 'template-parts/content-page', get_post_type() );
                elseif ( is_single() ):
                    get_template_part( 'template-parts/content-single', get_post_type() );
                endif;
        
            endwhile; ?>
    <?php endif; ?>

</div> <!-- .content-area -->

<?php 
// content-sidebar file
get_sidebar(); 
?>

<?php get_footer(); ?>