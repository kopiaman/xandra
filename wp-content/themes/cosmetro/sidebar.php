<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cosmetro
 */

$sidebar_position = get_theme_mod( 'sidebar_position' );

if ( is_404() || is_search() ) {
	return;
}

if ( 'fullwidth' === $sidebar_position ) {
	return;
}

if ( function_exists( 'is_shop' ) && is_shop() && ! ( isset( $_GET['post_type'] ) && 'product' === $_GET['post_type'] ) ) {
	return;
}

if ( function_exists( 'is_product' ) && is_product() ) {
	return;
}

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}

?>



<?php do_action( 'cosmetro_render_widget_area', 'sidebar' ); ?>
