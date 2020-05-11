<?php
/**
* The Footer for our Theme
*
* This is the template contains the closing of the <div id="content"> and all after content
*
* @package Minimal WP Starter Theme
*/
?>

    </div> <!-- .site-content -->

    <?php get_sidebar( 'footer' ); ?>

    <footer id="colophon" class="site-footer">
        <div class="wrap">
            <div class="site-info">

                <div class="footer-creds">
                    <p>&copy; <?php echo date( 'Y' ); ?> &middot; <?php bloginfo( 'name' ); ?></p>
                </div><!-- .footer-creds -->

                 
                <?php // Check if menu social is checked
                if( has_nav_menu( 'social_menu' ) ): ?>

                    <nav id="site-navigation" class="secondary-navigation">
                    <?php
                        $args = array(
                            'theme_location'    => 'social_menu'
                        );

                        wp_nav_menu( $args ); 
                    ?>
                    </nav>

                <?php endif; ?>

            </div><!-- .site-info -->
        </div><!-- .wrap -->

        <?php wp_footer(); ?>

    </footer><!-- .site-footer -->

</body>
</html>