<?php
/**
* The Widget Footer Sidebar
*
* @package Minimal WP Starter Theme
*/


if ( ! is_active_sidebar( 'left-footer' ) && ! is_active_sidebar( 'center-footer' ) && ! is_active_sidebar( 'right-footer' ) ) {
	return;
}
?>

<div id="footer-widget-area" class="widget-area">
    <div class="widgets">
        <?php dynamic_sidebar( 'left-footer' ); ?>
    </div>

    <div class="widgets">
        <?php dynamic_sidebar( 'center-footer' ); ?>
    </div>

    <div class="widgets">
        <?php dynamic_sidebar( 'right-footer' ); ?>
    </div>
</div>