<?php
/**
* The Home (Blog) Template
*
* @package Minimal WP Starter Theme
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">

    <header class="entry-header">
        <div class="archive-title">
            <h1 class="entry-title"><?php single_post_title(); ?></h1>
        </div>
    </header><!-- .entry-header -->

    <section class="posts-wrapper">
        <?php if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content-main', get_post_type() ); ?>
            
                <?php endwhile; ?>
        <?php endif; ?>
    </section> <!-- .posts-wrapper -->

    <?php get_template_part( 'template-parts/pagination', get_post_type() ); ?>

</div> <!-- .content-area -->

<?php get_sidebar('footer'); ?>

<?php get_footer(); ?>