<?php
/**
 * Template part for posts pagination.
 *
 * @package cosmetro
 */
the_posts_pagination(
	array(
		'prev_text' => '<i class="material-icons">navigate_before</i>' . esc_html__('Prev', 'cosmetro'),
		'next_text' => esc_html__('Next', 'cosmetro') . '<i class="material-icons">navigate_next</i>'
	)
);
