<?php
/**
 * Order Item Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-item.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see        http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

if (!defined('ABSPATH')) {
	exit;
}

if (!apply_filters('woocommerce_order_item_visible', true, $item)) {
	return;
}
?>
<tr class="<?php echo esc_attr(apply_filters('woocommerce_order_item_class', 'order_item', $item, $order)); ?>">
	<td class="product-thumbnail">
	  <?php
	   $thumbnail = $product->get_image( 'shop_catalog' );

	   if ( ! $product->is_visible() ) {
		echo $thumbnail;
	   } else {
		printf( '<a href="%s">%s</a>', esc_url( $product->get_permalink( $item ) ), $thumbnail );
	   }
	  ?>
	</td>
	<td class="product-name" data-title="<?php esc_html_e('Product', 'cosmetro'); ?>">
		<?php
		$is_visible = $product && $product->is_visible();

		echo '<h6>' . apply_filters('woocommerce_order_item_name', $is_visible ? sprintf('<a href="%s">%s</a>', get_permalink($item['product_id']), $item['name']) : $item['name'], $item, $is_visible) . '</h6>';

		do_action('woocommerce_order_item_meta_start', $item_id, $item, $order);

		$order->display_item_meta($item);
		$order->display_item_downloads($item);

		do_action('woocommerce_order_item_meta_end', $item_id, $item, $order);
		?>
	</td>
	<td data-title="<?php esc_html_e('Quantity', 'cosmetro'); ?>">
		<?php

		echo apply_filters('woocommerce_order_item_quantity_html', $item['qty'], $item);
		?>
	</td>
	<td class="product-total" data-title="<?php esc_html_e('Total', 'cosmetro'); ?>">
		<?php echo $order->get_formatted_line_subtotal($item); ?>
	</td>
</tr>
<?php if ($show_purchase_note && $purchase_note) : ?>
	<tr class="product-purchase-note">
		<td colspan="3"><?php echo wpautop(do_shortcode(wp_kses_post($purchase_note))); ?></td>
	</tr>
<?php endif; ?>
