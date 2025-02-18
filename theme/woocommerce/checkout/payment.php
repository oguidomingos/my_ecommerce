<?php
/**
 * Checkout Payment Section
 *
 * @package WooCommerce\Templates
 * @version 8.1.0
 */

defined('ABSPATH') || exit;

if (!wp_doing_ajax()) {
    do_action('woocommerce_review_order_before_payment');
}
?>
<div id="payment" class="woocommerce-checkout-payment bg-white rounded-lg p-6 mt-8">
    <?php if (WC()->cart->needs_payment()) : ?>
        <div class="space-y-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">
                <?php esc_html_e('Payment methods', 'woocommerce'); ?>
            </h3>
            <ul class="wc_payment_methods payment_methods methods divide-y divide-gray-100">
                <?php
                if (!empty($available_gateways)) {
                    foreach ($available_gateways as $gateway) {
                        wc_get_template('checkout/payment-method.php', array('gateway' => $gateway));
                    }
                } else {
                    echo '<li class="text-gray-500 py-4">';
                    echo apply_filters('woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__('Sorry, it seems that there are no available payment methods. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce') : esc_html__('Please fill in your details above to see available payment methods.', 'woocommerce'));
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="mt-8 space-y-4">
        <noscript>
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
                <p class="text-yellow-700">
                    <?php
                    printf(
                        /* translators: $1 and $2 opening and closing emphasis tags respectively */
                        esc_html__('Since your browser does not support JavaScript, or it is disabled, please ensure you click the %1$sUpdate Totals%2$s button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce'),
                        '<em>',
                        '</em>'
                    );
                    ?>
                </p>
                <button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e('Update totals', 'woocommerce'); ?>"><?php esc_html_e('Update totals', 'woocommerce'); ?></button>
            </div>
        </noscript>

        <?php wc_get_template('checkout/terms.php'); ?>

        <?php do_action('woocommerce_review_order_before_submit'); ?>

        <div class="form-row place-order">
            <button type="submit" class="w-full bg-[#FF7E1B] hover:bg-[#417B5A] text-white font-bold py-4 px-6 rounded-md transition duration-200" name="woocommerce_checkout_place_order" id="place_order" value="<?php esc_attr_e('Place order', 'woocommerce'); ?>" data-value="<?php esc_attr_e('Place order', 'woocommerce'); ?>">
                <?php esc_html_e('Place order', 'woocommerce'); ?>
            </button>

            <?php do_action('woocommerce_review_order_after_submit'); ?>

            <?php wp_nonce_field('woocommerce-process_checkout', 'woocommerce-process-checkout-nonce'); ?>
        </div>
    </div>
</div>
<?php
if (!wp_doing_ajax()) {
    do_action('woocommerce_review_order_after_payment');
}