<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cosmetro
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('posts-list__item card hentry'); ?>>
	<div class="post-list__item-content">


		<header class="entry-header">
			<?php
			cosmetro_meta_categories('loop', array(
				'separator' => ',',
			));
			?>

			<?php
			if (is_single()) {
				the_title('<h1 class="entry-title">', '</h1>');
			} else {
				the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
			}
			?>
		</header><!-- .entry-header -->


		<div class="post-featured-content invert">
			<?php cosmetro_sticky_label(); ?>
			<?php do_action('cherry_post_format_audio'); ?>
		</div><!-- .post-featured-content -->

		<div class="post-body">

			<?php $blog_content = get_theme_mod('blog_posts_content', cosmetro_theme()->customizer->get_default('blog_posts_content'));
			if ($blog_content == 'full') : ?>
				<div class="entry-content">
					<?php cosmetro_blog_content(110); ?>
				</div><!-- .entry-content -->
			<?php endif; ?>


			<footer class="entry-footer">

				<?php
				cosmetro_meta_date('loop', array(
					'before' => ' <i class="material-icons">access_time</i><span>' . esc_html__('Published on', 'cosmetro') . '</span> ',
					'after'  => '',
				));
				?>

				<?php
				cosmetro_meta_author(
					'loop',
					array(
						'before' => '<i class="material-icons">person</i>' . esc_html__('By', 'cosmetro') . ' ',
						'after'  => '',
					)
				);
				?>

				<?php if ('post' === get_post_type()) : ?>
					<div class="entry-meta">
						<?php
						cosmetro_meta_comments('loop', array(
							'before' => '<i class="material-icons">mode_comment</i>',
							'zero'   => '0',
							'one'    => '1',
							'plural' => '%',
						));

						cosmetro_meta_tags('loop', array(
							'before'    => '<i class="material-icons">folder_open</i>',
							'separator' => ', ',
						));
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>


				<?php cosmetro_read_more(); ?>
				<?php cosmetro_share_buttons('loop'); ?>
			</footer><!-- .entry-footer -->


		</div>


	</div>

</article><!-- #post-## -->
