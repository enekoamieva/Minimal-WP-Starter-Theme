<?php
/**
* Template Part Content Page
*
 * @package Minimal WP Starter Theme
*/
?>

<article class="post" id="post-<?php the_ID(); ?>">
    <header class="entry-header">
        <!-- <?php the_post_thumbnail(); ?> -->
        <h1 class="entry-title"><?php the_title() ;?></h1>	
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->

</article><!-- .post -->