<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cosmetro
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php cosmetro_get_page_preloader(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'cosmetro'); ?></a>
	<header id="masthead" <?php cosmetro_header_class(); ?>>
		<?php get_template_part('template-parts/header/top-panel'); ?>
		<div class="header-container">
			<div <?php echo cosmetro_get_container_classes(array('header-container_wrap')); ?>>
				<?php get_template_part('template-parts/header/layout', get_theme_mod('header_layout_type')); ?>
			</div>
		</div><!-- .header-container -->
	</header><!-- #masthead -->
	<?php do_action('cosmetro_render_widget_area', 'full-width-header-area'); ?>
	<div id="content-site" <?php cosmetro_content_class(); ?>>
