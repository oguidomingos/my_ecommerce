<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined('ABSPATH') || exit;

/* translators: %s: Quantity. */
$label = !empty($args['product_name']) ? sprintf(esc_html__('Quantidade de %s', 'woocommerce'), $args['product_name']) : esc_html__('Quantidade', 'woocommerce');

?>
<div class="quantity">
    <button type="button" class="quantity-btn minus">−</button>
    <input
        type="number"
        id="<?php echo esc_attr($input_id); ?>"
        class="<?php echo esc_attr(join(' ', (array) $classes)); ?>"
        step="<?php echo esc_attr($step); ?>"
        min="<?php echo esc_attr($min_value); ?>"
        max="<?php echo esc_attr($max_value); ?>"
        name="<?php echo esc_attr($input_name); ?>"
        value="<?php echo esc_attr($input_value); ?>"
        title="<?php echo esc_attr_x('Quantidade', 'Product quantity input tooltip', 'woocommerce'); ?>"
        placeholder="<?php echo esc_attr($placeholder); ?>"
        inputmode="<?php echo esc_attr($inputmode); ?>"
        autocomplete="<?php echo esc_attr(isset($autocomplete) ? $autocomplete : 'on'); ?>"
    />
    <button type="button" class="quantity-btn plus">＋</button>
</div>