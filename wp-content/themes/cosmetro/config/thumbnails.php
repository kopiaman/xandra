<?php
/**
 * Thumbnails configuration.
 *
 * @package Cosmetro
 */

add_action('after_setup_theme', 'cosmetro_register_image_sizes', 5);
function cosmetro_register_image_sizes()
{
	set_post_thumbnail_size(370, 230, true);

	// Registers a new image sizes.
	add_image_size('cosmetro-thumb-s', 150, 150, true);
	add_image_size('cosmetro-thumb-m', 400, 400, true);
	add_image_size('cosmetro-thumb-post-thumbnail-large', 983, 823, true);
	add_image_size('cosmetro-thumb-l', 1170, 780, true);

	add_image_size('cosmetro-thumb-536-449', 536, 449, true);
	add_image_size('cosmetro-thumb-196-213', 196, 213, true);
	add_image_size('cosmetro-thumb-120-120', 120, 120, true);
	add_image_size('cosmetro-thumb-149-126', 149, 126, true);
	add_image_size('cosmetro-thumb-290-315', 290, 315, true);
}