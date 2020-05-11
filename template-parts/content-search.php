<?php
/**
* Template Part Content Search
*
 * @package Minimal WP Starter Theme
*/
?>

<article class="post" id="post-<?php the_ID(); ?>">
    <header class="entry-header">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
            <h2 class="entry-title"><?php the_title() ;?></h2>	
        </a>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->

</article><!-- .post -->