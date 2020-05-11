<?php
/**
* The Header for our Theme
*
* This is the template that displays all of the <head> section until <div id="content">
*
* @package Minimal WP Starter Theme
*/
?>

<header id="masthead" class="site-header">
    <div class="header-content">

        <div class="site-branding">

        <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
        <?php $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
        <!-- <?php var_dump($logo); ?> -->
        <?php if ( has_custom_logo() ): ?>
            <a href="<?php echo esc_url( home_url() ); ?>" >
                <img class="site-logo" src="<?php echo esc_url( $logo[0] ); ?>" alt="<?php get_bloginfo( 'name' ); ?>">
            </a>
        <?php else: ?>
            <h1 class="site-title">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </h1>
            <p class="site-description"><?php bloginfo( 'description' ) ?></p>
        <?php endif; ?>
        </div><!-- .site-branding -->

        <?php // Check is responsive_menu is activated
        if( has_nav_menu( 'responsive_menu' ) ):
            // This class main-navigation-hide is hidden with overlay-menu.js ?>
            <nav id="site-navigation" class="main-navigation main-navigation-hide">
        <?php else: ?>
            <nav id="site-navigation" class="main-navigation">
        <?php endif; ?>

            <div class="nav-menu">
                <?php
                $args = array(
                    'theme_location' => 'main_menu'
                );

                wp_nav_menu( $args ); 
                ?>
            </div><!-- .nav-menu -->
        </nav><!-- .main-navigation-->

        <?php if( has_nav_menu( 'responsive_menu' ) ): ?>

            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn close-nav">&times;</a>
                <div class="overlay-content">
                    <?php
                    $args = array(
                        'theme_location' => 'responsive_menu'
                    );

                    wp_nav_menu( $args ); 
                    ?>
                </div>
            </div>
            <span style="font-size:30px;cursor:pointer" class="open-nav">&#9776;</span>

        <?php endif; ?>

    </div><!-- .header-content -->
</header> <!-- .site-header -->