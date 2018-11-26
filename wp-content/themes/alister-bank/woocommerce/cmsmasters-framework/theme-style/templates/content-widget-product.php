<?php
/**
 * @cmsmasters_package 	Alister Bank
 * @cmsmasters_version 	1.0.2
 */


global $product;
?>
<li>
	<?php do_action( 'woocommerce_widget_product_item_start', $args ); ?>

	<a href="<?php echo esc_url( $product->get_permalink() ); ?>">
		<?php echo $product->get_image(); ?>
		<span class="product-title"><?php echo $product->get_name(); ?></span>
	</a>

	<?php alister_bank_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full'); ?>

	<?php echo $product->get_price_html(); ?>

	<?php do_action( 'woocommerce_widget_product_item_end', $args ); ?>
</li>