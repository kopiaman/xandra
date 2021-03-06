<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Cosmetro
 */
?>

<section class="error-404 not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e('404', 'cosmetro'); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<h3><?php esc_html_e('The page not found.', 'cosmetro'); ?></h3>
		<p><a class="btn btn-color-2" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Visit home page', 'cosmetro'); ?></a></p>
		<hr>
		<p><?php esc_html_e('Unfortunately the page you were looking for could not be found. Maybe search can help.', 'cosmetro'); ?></p>

		<?php get_search_form(); ?>

	</div><!-- .page-content -->
</section><!-- .error-404 -->