<?php
/**
* Template Part Content Page
*
* @package Minimal WP Starter Theme
*/
?>

<article class="post" id="post-<?php the_ID(); ?>">
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title() ;?></h1>
        <?php the_post_thumbnail(); ?>
        <div class="entry-meta  bypostauthor">
             <?php
                _e( 'Por ' , 'minimal_wp_st' );
                the_author_posts_link();
                _e( ' el ', 'minimal_wp_st' );
                the_time('d/m/Y');
                _e( '&middot', 'minimal_wp_st' );
                the_category(', ');
             ?>
        </div>
    </header><!-- .entry-header -->

    <div id="post-<?php the_ID(); ?>" class="entry-content <?php post_class();?>" >
        <?php the_content(); ?>
    </div><!-- .entry-content -->

</article><!-- .post -->