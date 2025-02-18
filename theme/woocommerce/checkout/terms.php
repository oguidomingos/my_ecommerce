<?php
/**
 * Checkout terms and conditions
 *
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

if (apply_filters('woocommerce_checkout_show_terms', true) && function_exists('wc_terms_and_conditions_checkbox_enabled')) {
    do_action('woocommerce_checkout_before_terms_and_conditions');

    ?>
    <div class="woocommerce-terms-and-conditions-wrapper bg-gray-50 p-4 rounded-lg mb-6">
        <?php
        /**
         * Terms and conditions hook used to inject content.
         */
        do_action('woocommerce_checkout_terms_and_conditions');
        ?>

        <?php if (wc_terms_and_conditions_checkbox_enabled()) : ?>
            <p class="form-row validate-required flex items-start space-x-2 mt-4">
                <input 
                    type="checkbox" 
                    class="form-checkbox h-4 w-4 mt-1 text-[#417B5A] border-gray-300 rounded focus:ring-[#417B5A]" 
                    name="terms" 
                    <?php checked(apply_filters('woocommerce_terms_is_checked_default', isset($_POST['terms'])), true); ?> 
                    id="terms" 
                />

                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox flex-1 text-sm text-gray-600" for="terms">
                    <span class="woocommerce-terms-and-conditions-checkbox-text"><?php wc_terms_and_conditions_checkbox_text(); ?></span>&nbsp;
                    <span class="required text-[#FF7E1B]">*</span>
                </label>
                <input type="hidden" name="terms-field" value="1" />
            </p>
        <?php endif; ?>
    </div>
    <?php

    do_action('woocommerce_checkout_after_terms_and_conditions');
}