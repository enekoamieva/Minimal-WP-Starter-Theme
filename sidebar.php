
<?php
/**
* The Rifght Widget Sidebar
*
* @package Minimal WP Starter Theme
*/


if ( ! is_active_sidebar( 'right' ) || is_page_template( 'full-width-content.php' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
    <div class="widgets">
        <?php dynamic_sidebar( 'right' ); ?>
    </div>
</aside>