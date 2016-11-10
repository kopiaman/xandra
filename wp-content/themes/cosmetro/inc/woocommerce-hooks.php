<?php
/**
 * cosmetro WooCommerce Theme hooks.
 *
 * @package cosmetro
 */


if ( cosmetro_has_woocommerce_share() ) {
	remove_action( 'wp_footer', 'toastie_wc_smsb_social_footer' );
	remove_action( 'woocommerce_single_product_summary', 'toastie_wc_smsb_form_code', 31 );
	add_action( 'woocommerce_share', 'toastie_wc_smsb_form_code' );
	add_action( 'woocommerce_before_single_product_summary', 'cosmetro_enqueue_single_product_smsb_assets' );
}

remove_action( 'wp_print_scripts', 'toastie_wc_smsb_my_enqueue' );


add_action( 'after_setup_theme', 'cosmetro_woocommerce_support' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

add_action( 'woocommerce_before_single_product', 'cosmetro_enqueue_single_product_assets' );


add_filter( 'woocommerce_sale_flash', 'cosmetro_woocommerce_sale_flash' );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_sale_flash', 1 );


add_filter( 'woocommerce_pagination_args', 'cosmetro_woo_pagination_style' );
add_filter( 'woocommerce_comment_pagination_args', 'cosmetro_woo_pagination_style' );

add_filter( 'woocommerce_get_price_html_from_to', 'cosmetro_woocommerce_get_price_html_from_to', 10, 3 );


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 11 );

add_action( 'widgets_init', 'cosmetro_override_woocommerce_widgets', 15 );

add_action( 'woocommerce_before_shop_loop_item_title', 'cosmetro_woocommerce_show_flash' );

add_action( 'woocommerce_before_shop_loop_item_title', 'cosmetro_woocommerce_list_categories', 12 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_rating', 6 );

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 7 );

add_action( 'woocommerce_before_shop_loop_item', 'cosmetro_product_image_wrap_open', 2 );
add_action( 'woocommerce_before_shop_loop_item_title', 'cosmetro_product_image_wrap_close', 12 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'cosmetro_products_carousel_widget_sale_end_date', 11 );

add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 3 );
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 10 );

add_action( 'woocommerce_after_shop_loop_item', 'cosmetro_wishlist_compare_wrap_open', 11 );
add_action( 'woocommerce_after_shop_loop_item', 'cosmetro_wishlist_compare_wrap_close', 20 );


add_action( 'woocommerce_shop_loop_item_title', 'cosmetro_price_rating_wrap_open', 13 );
add_action( 'woocommerce_after_shop_loop_item', 'cosmetro_price_rating_wrap_close', 6 );

add_action( 'woocommerce_after_shop_loop_item', 'cosmetro_compare_tocart_wrap_open', 6 );
add_action( 'woocommerce_after_shop_loop_item', 'cosmetro_compare_tocart_wrap_close', 21 );

add_filter( 'woocommerce_show_page_title', '__return_false' );

add_filter( 'woocommerce_loop_add_to_cart_link', 'cosmetro_woocommerce_loop_add_to_cart_link', 10, 2 );

if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.3', '>=' ) ) {
	add_filter( 'woocommerce_add_to_cart_fragments', 'cosmetro_cart_link_fragment' );
} else {
	add_filter( 'add_to_cart_fragments', 'cosmetro_cart_link_fragment' );
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 32 );

add_action( 'woocommerce_before_shop_loop', 'cosmetro_woocommerce_open_order_wrap', 29 );

add_action( 'woocommerce_before_shop_loop', 'cosmetro_woocommerce_close_order_wrap', 33 );

add_action( 'pre_get_posts', 'cosmetro_remove_products_from_posts_search', 99 );

add_filter( 'tm_products_carousel_widget_sale_end_date_format', 'cosmetro_products_format_sale_end_date' );
add_filter( 'cosmetro_products_sale_end_date_format', 'cosmetro_products_format_sale_end_date' );

add_filter( 'tm_categories_carousel_widget_space_between_slides', 'cosmetro_categories_carousel_space_between', 10 );
add_filter( 'tm_products_carousel_widget_space_between_slides', 'cosmetro_categories_carousel_space_between', 30 );

add_filter( 'woocommerce_single_product_image_thumbnail_html', 'cosmetro_woocommerce_single_product_image_thumbnail_html', 10, 4 );

add_filter( 'woocommerce_product_thumbnails_columns', 'cosmetro_woocommerce_product_thumbnails_columns' );
add_filter( 'woocommerce_product_gallery_attachment_ids', 'cosmetro_woocommerce_product_gallery_attachment_ids' );

add_filter( 'tm_woocommerce_include_bootstrap_grid', '__return_false' );
add_filter( 'tm_wc_categories_carousel_widget_wrapper_open', 'cosmetro_tm_wc_categories_carousel_widget_wrapper_open' );


add_filter( 'cherry_page_title', 'cosmetro_cherry_page_title', 10, 2 );
add_filter( 'cherry_breadcrumbs_custom_trail', 'cosmetro_get_woo_breadcrumbs', 10, 2 );


/**
 * Set od Woocommerce pagination style
 */
function cosmetro_woo_pagination_style() {
	return array(
		'prev_text' => '<i class="material-icons">navigate_before</i>' . esc_html__( 'Prev', 'cosmetro' ),
		'next_text' => esc_html__( 'Next', 'cosmetro' ) . '<i class="material-icons">navigate_next</i>'
	);
}

/**
 * Enable Woocommerce theme support
 */
function cosmetro_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

/**
 * Check is WPML Plugin exists and enabled
 *
 * @return bool
 */
function cosmetro_has_wpml() {
	return in_array(
		'sitepress-multilingual-cms/sitepress.php',
		apply_filters( 'active_plugins', get_option( 'active_plugins' ) )
	);
}

/**
 * Check is Woocommerce Plugin exists and enabled
 *
 * @return bool
 */
function cosmetro_has_woocommerce() {
	return class_exists( 'woocommerce' );
}


/**
 * Replace sale flash text
 *
 * @return string
 */
function cosmetro_woocommerce_sale_flash() {
	return '<span class="onsale">' . esc_html__( 'Sale', 'cosmetro' ) . '</span>';
}

/**
 * Change WooCommerce loop category title layout
 *
 * @param object $category
 *
 * @return string
 */
function woocommerce_template_loop_category_title( $category ) {
	?>
	<h3>
		<?php
		echo $category->name;
		if ( $category->count > 0 ) {
			echo apply_filters( 'woocommerce_subcategory_count_html', ' <mark class="count"><span class="count__number">' . $category->count . '</span> ' . esc_html__( 'products', 'cosmetro' ) . '</mark>', $category );
		}
		?>
	</h3>
	<?php
}

/**
 * Override Woocommerce Standard Widgets
 */
function cosmetro_override_woocommerce_widgets() {
	if ( class_exists( 'WC_Widget_Recent_Reviews' ) ) {
		unregister_widget( 'WC_Widget_Recent_Reviews' );
		include_once( 'widgets/cosmetro-wc-recent-reviews-products/class-cosmetro-reviews-product-widget.php' );
		register_widget( 'Cosmetro_WC_Widget_Recent_Reviews' );
	}
	if ( class_exists( 'WP_Widget_Recent_Posts' ) ) {
		unregister_widget( 'WP_Widget_Recent_Posts' );
		include_once( 'widgets/cosmetro-wc-recent-post/class-cosmetro-widget-recent-posts.php' );
		register_widget( 'Cosmetro_WP_Widget_Recent_Posts' );
	}
}

/**
 * Change WooCommerce Price Output when Product is on Sale
 *
 * @param  string     $price Price
 * @param  int|string $from  Regular price
 * @param  int|string $to    Sale price
 *
 * @return string
 */
function cosmetro_woocommerce_get_price_html_from_to( $price, $from, $to ) {

	$price = '<ins>' . ( ( is_numeric( $to ) ) ? wc_price( $to ) : $to ) . '</ins> <del>' . ( ( is_numeric( $from ) ) ? wc_price( $from ) : $from ) . '</del>';

	return $price;
}

/**
 * Add WooCommerce 'New' and 'Featured' Flashes
 *
 * @return string
 */
function cosmetro_woocommerce_show_flash() {

	global $product;

	if ( ! $product->is_on_sale() ) {
		$flash_value = date( 'U' ) - strtotime( $product->post->post_date );

		if ( $flash_value < 604800 ) {
			echo '<span class="new">' . esc_html__( 'New', 'cosmetro' ) . '</span>';
		} else if ( $product->is_featured() ) {
			echo '<span class="featured">' . esc_html__( 'Featured', 'cosmetro' ) . '</span>';
		}
	}
}

/**
 * Open wrap product loop elements
 *
 * @return string
 */
function cosmetro_product_image_wrap_open() {
	echo '<div class="block_product_thumbnail">';
}

/**
 * Close wrap product loop elements
 *
 * @return string
 */
function cosmetro_product_image_wrap_close() {
	echo '</div>';
}


/**
 * Open wrap price add to rating
 *
 * @return string
 */
function cosmetro_price_rating_wrap_open() {
	echo '<div class="block_price_rating">';
}

/**
 * Close wrap price add to rating
 *
 * @return string
 */
function cosmetro_price_rating_wrap_close() {
	echo '</div>';
}


/**
 * Open wrap wishlist compare and add to cart
 *
 * @return string
 */
function cosmetro_compare_tocart_wrap_open() {
	echo '<div class="block_compare_tocart">';
}

/**
 * Close wrap wishlist compare and add to cart
 *
 * @return string
 */
function cosmetro_compare_tocart_wrap_close() {
	echo '</div>';
}


/**
 * Displays list of categories
 *
 * @return list of categories
 */
function cosmetro_woocommerce_list_categories() {
	global $product;

	echo $product->get_categories( ',</li> <li>', '<ul class="product-widget-categories"><li>', '</li></ul>' );
}

/**
 * Open wrap wishlist and compare buttons
 *
 * @return string
 */
function cosmetro_wishlist_compare_wrap_open() {
	echo "<div class='block_wishlist_compare'>";
}

/**
 * Close wrap wishlist and compare buttons
 *
 * @return string
 */
function cosmetro_wishlist_compare_wrap_close() {
	echo "</div>";
}

/**
 * Modify WooCommerce Add to cart Button in Loop
 *
 * @param  array  $product Button object
 * @param  string $link
 *
 * @return string
 */
function cosmetro_woocommerce_loop_add_to_cart_link( $link, $product ) {
	return sprintf(
		'<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="1" class="add_to_cart_button %s">%s</a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( $product->id ),
		esc_attr( $product->get_sku() ),
		implode(
			' ', array_filter(
			array(
				'button',
				'product_type_' . $product->product_type,
				$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
				$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : ''
			)
		)
		),
		( $product->is_purchasable() && $product->is_in_stock() && $product->is_type( 'simple' ) ) ? '<span class="fl-flat-icons-set-2-shopping191 add"></span>'
			. '<span class="fl-line-icon-set-rounded25 added"></span>'
			. '<span class="product_actions_tip add_to_cart_button__text add">' . esc_html( $product->add_to_cart_text() ) . '</span>'
			. '<span class="product_actions_tip add_to_cart_button__text added">' . esc_html__( 'Added to cart ', 'cosmetro' ) . '</span>' : '<span class="material-icons option-icon">visibility</span><span class="product_actions_tip add_to_cart_button__text select">' . esc_html( $product->add_to_cart_text() ) . '</span>'
	);
}


function cosmetro_cart_link_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	cosmetro_cart_link();

	$fragments['div.cart-contents'] = ob_get_clean();

	return $fragments;
}

function cosmetro_woocommerce_open_order_wrap() {
	echo '<div class="filter_count_section">';
}

function cosmetro_woocommerce_close_order_wrap() {
	echo '</div>';
}

function cosmetro_remove_products_from_posts_search( $query ) {
	global $wp_post_types;
	if ( ! $query->is_admin && $query->is_search && post_type_exists( 'product' ) ) {
		$wp_post_types['product']->exclude_from_search = true;
	}
}


/**
 * Sale and date format
 *
 * @return string
 */
function cosmetro_products_format_sale_end_date() {
	return '<span>%D <i>' . esc_html__( 'days', 'cosmetro' ) . '</i></span> <span>%H <i>' . esc_html__( 'Hrs', 'cosmetro' ) . '</i></span><span>%M <i>' . esc_html__( 'Min', 'cosmetro' ) . '</i></span>';
}


function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $deprecated1 = 0, $deprecated2 = 0 ) {
	global $post, $product;

	if ( has_post_thumbnail() ) {

		$iPod    = stripos( $_SERVER['HTTP_USER_AGENT'], "iPod" );
		$iPhone  = stripos( $_SERVER['HTTP_USER_AGENT'], "iPhone" );
		$iPad    = stripos( $_SERVER['HTTP_USER_AGENT'], "iPad" );
		$version = stripos( $_SERVER['HTTP_USER_AGENT'], "8.0 Mobile" );

		if ( ( $iPod || $iPhone || $iPad ) && $version ) {
			$image = wp_get_attachment_image_src( $product->get_image_id(), $size );
			$image = '<img src="' . $image[0] . '" alt="' . $product->get_title() . '">';

			return $image;
		} else {
			return get_the_post_thumbnail( $post->ID, $size );
		}
	} elseif ( wc_placeholder_img_src() ) {
		return wc_placeholder_img( $size );
	}
}

function cosmetro_categories_carousel_space_between() {
	return sprintf( '60' );
}


function cosmetro_woocommerce_product_thumbnails_columns() {
	return 4;
}

// add to thumbnails thumbnail image
function cosmetro_woocommerce_product_gallery_attachment_ids( $attachment_ids ) {
	global $product;
	if ( has_post_thumbnail() ) {
		array_unshift( $attachment_ids, get_post_thumbnail_id() );
	}

	return $attachment_ids;
}


function cosmetro_woocommerce_single_product_image_thumbnail_html( $link, $attachment_id, $post_ID, $image_class ) {
	$image_link      = wp_get_attachment_url( $attachment_id );
	$image_title     = esc_attr( get_the_title( $attachment_id ) );
	$image_caption   = esc_attr( get_post_field( 'post_excerpt', $attachment_id ) );
	$image           = wp_get_attachment_image(
		$attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'cosmetro-thumb-120-120' ), 0, $attr = array(
		'title' => $image_title,
		'alt'   => $image_title
	)
	);
	$large_thumb_src = wp_get_attachment_image_src( $attachment_id, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ) );

	return sprintf( '<div class="thumbnail %s" data-href="%s" data-thumb="%s" title="%s">%s</div>', $image_class, $image_link, $large_thumb_src[0], $image_caption, $image );
}

function cosmetro_enqueue_single_product_assets() {
	// Easyzoom
	wp_enqueue_script( 'jquery-easyzoom' );
	wp_enqueue_script( 'single-init', COSMETRO_THEME_URI . '/assets/js/single_product.js', array( 'jquery' ), '1.0.0', true );
}

function woocommerce_show_product_images() {
	global $post, $woocommerce, $product;
	?>
	<div class="images">
		<?php
			$image_caption    = get_post( get_post_thumbnail_id() )->post_excerpt;
			$image_link       = wp_get_attachment_url( get_post_thumbnail_id() );
			$image            = get_the_post_thumbnail(
				$post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
				'title' => get_the_title( get_post_thumbnail_id() )
			)
			);
			$attachment_count = count( $product->get_gallery_attachment_ids() );

			if ( 0 < $attachment_count ) {
				$gallery = '[product-gallery]';
			} else {
				$gallery = '';
			}
			$image_link = wp_get_attachment_url( get_post_thumbnail_id() );
			$image      = get_the_post_thumbnail(
				$post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
				'title' => get_the_title( get_post_thumbnail_id() )
			)
			);
			$enlarge    = '';
			if ( 'yes' === get_option( 'woocommerce_enable_lightbox', 'yes' ) ) {
				wp_enqueue_script( 'magnific-popup' );
				$enlarge = '<div class="enlarge"><i class="material-icons">zoom_in</i></div>';
			}
			echo sprintf( '<div class="easyzoom"><a href="%s" class="woocommerce-main-image">%s</a></div>%s', $image_link, $image, $enlarge );

		do_action( 'woocommerce_product_thumbnails' ); ?>
	</div>

<?php }



function cosmetro_cherry_page_title( $title, $args ) {
	if ( function_exists( 'is_product' ) ) {
		if ( is_product() ) {
			return sprintf( $args['page_title_format'], esc_html__( 'Shop', 'cosmetro' ) );
		}
	}
	if ( is_single() ) {
		return sprintf( $args['page_title_format'], esc_html__( 'Blog', 'cosmetro' ) );
	}

	return $title;
}



/**
 * Get custom WooCommerce breadcrumbs trail
 *
 * @since  4.0.0
 *
 * @param  bool $is_custom_breadcrumbs default custom breadcrums trigger
 */
function cosmetro_get_woo_breadcrumbs( $is_custom_breadcrumbs, $args ) {

	if ( ! cosmetro_is_woo_page() ) {
		return $is_custom_breadcrumbs;
	}

	if ( ! class_exists( 'Cherry_Woo_Breadcrumbs' ) ) {
		require_once( 'classes/class-cherry-woo-breadcrumbs.php' );
	}

	$core = apply_filters( 'cosmetro_get_theme_core', false );

	if ( ! $core ) {
		return $is_custom_breadcrumbs;
	}

	$woo_breadcrums = new Cherry_Woo_Breadcrumbs( $core, $args );

	return array( 'items' => $woo_breadcrums->items, 'page_title' => $woo_breadcrums->page_title );
}

/**
 * Check if we viewing Woo-related page
 *
 * @since  4.0.0
 */
function cosmetro_is_woo_page() {

	if ( ! function_exists( 'is_woocommerce' ) ) {
		return false;
	}

	return is_woocommerce();
}


function cosmetro_has_woocommerce_share() {
	return in_array(
		'woocommerce-social-media-share-buttons/index.php',
		apply_filters( 'active_plugins', get_option( 'active_plugins' ) )
	);
}

function cosmetro_enqueue_single_product_smsb_assets() {
	$smsb_data = get_plugin_data( WP_PLUGIN_DIR . '/woocommerce-social-media-share-buttons/index.php' );
	if ( '1.3.0' !== $smsb_data['Version'] ) {
		if ( function_exists( 'toastie_wc_smsb_my_enqueue' ) ) {
			toastie_wc_smsb_my_enqueue();
		}
	} else {
		wp_enqueue_script(
			'smsb_script', COSMETRO_THEME_URI . '/assets/js/smsb_script.min.js', array( 'jquery' ), '1.0
		.0', true
		);
	}
}

/**
 * Check is Currency Switcher Plugin exists and enabled
 *
 * @return bool
 */
function cosmetro_has_currency_switcher() {
	return in_array( 'woocommerce-currency-switcher/index.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
}

/**
 * Display Currency Switcher
 * @since  1.0.0
 * @uses   cosmetro_is_woocommerce_activated() check if WooCommerce is activated
 * @return void
 */
if ( ! function_exists( 'cosmetro_currency_switcher' ) ) {
	function cosmetro_currency_switcher() {
		if ( cosmetro_has_currency_switcher() && cosmetro_is_woocommerce_activated() ) {
			echo do_shortcode( '[woocs show_flags=0 width="60px" txt_type="code"]' );
		}
	}
}

/**
 * Show top currency switcher.
 *
 * @since  1.0.0
 *
 * @param  string $format Output formatting.
 *
 * @return void
 */
function cosmetro_top_currency_switcher( $format = '%s' ) {
	$is_enabled = get_theme_mod( 'top_currency_switcher', cosmetro_theme()->customizer->get_default( 'top_currency_switcher' ) );

	if ( ! $is_enabled ) {
		return;
	}

	printf( $format, cosmetro_currency_switcher() );
}


/**
 * Set styles for tm-categories-carousel-widget-wrapper
 */
function cosmetro_tm_wc_categories_carousel_widget_wrapper_open() {
	return '<ul class="swiper-wrapper tm-categories-carousel-widget-wrapper">';
}