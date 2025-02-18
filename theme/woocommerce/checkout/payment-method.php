<?php
/**
 * Output a single payment method
 *
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<li class="wc_payment_method payment_method_<?php echo esc_attr($gateway->id); ?> bg-white rounded-lg border border-gray-100 mb-4">
    <div class="flex items-start p-4 hover:bg-gray-50 transition duration-150">
        <input id="payment_method_<?php echo esc_attr($gateway->id); ?>" 
               type="radio" 
               class="form-radio mt-1 h-4 w-4 text-[#417B5A] border-gray-300 focus:ring-[#417B5A]" 
               name="payment_method" 
               value="<?php echo esc_attr($gateway->id); ?>" 
               <?php checked($gateway->chosen, true); ?> 
               data-order_button_text="<?php echo esc_attr($gateway->order_button_text); ?>" />

        <label class="flex-1 ml-3" for="payment_method_<?php echo esc_attr($gateway->id); ?>">
            <span class="font-medium text-gray-900">
                <?php echo $gateway->get_title(); /* phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped */ ?>
            </span>
            <?php if ($gateway->has_fields() || $gateway->get_description()) : ?>
                <span class="block mt-1 text-sm text-gray-500">
                    <?php echo $gateway->get_description(); /* phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped */ ?>
                </span>
            <?php endif; ?>
        </label>
    </div>

    <?php if ($gateway->has_fields()) : ?>
        <div class="payment_box payment_method_<?php echo esc_attr($gateway->id); ?> bg-gray-50 p-4 mt-2 border-t border-gray-100" <?php if (!$gateway->chosen) : ?>style="display:none;"<?php endif; ?>>
            <?php $gateway->payment_fields(); ?>
        </div>
    <?php endif; ?>
</li>