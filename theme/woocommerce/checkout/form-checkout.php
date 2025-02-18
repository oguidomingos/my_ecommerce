<?php
/**
 * Checkout Form
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="container mx-auto px-4 py-12 max-w-7xl">
    <div data-block-name="woocommerce/checkout" class="wp-block-woocommerce-checkout alignwide wc-block-checkout">
        <div class="with-scroll-to-top__scroll-point" aria-hidden="true"></div>
        
        <div class="wc-block-components-notices"></div>
        <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list" tabindex="-1">
            <div></div>
        </div>
        
        <div class="wc-block-components-sidebar-layout wc-block-checkout is-large flex flex-col lg:flex-row gap-8">
            <div class="wc-block-components-main wc-block-checkout__main wp-block-woocommerce-checkout-fields-block flex-1">
                <form aria-label="Finalizar compras" class="wc-block-components-form wc-block-checkout__form space-y-8 bg-white p-6 rounded-lg shadow-sm">
                    <?php do_action('woocommerce_checkout_before_customer_details'); ?>
                    
                    <div id="customer_details">
                        <?php do_action('woocommerce_checkout_billing'); ?>
                        <?php do_action('woocommerce_checkout_shipping'); ?>
                    </div>
                    
                    <?php do_action('woocommerce_checkout_after_customer_details'); ?>
                    <?php do_action('woocommerce_checkout_payment'); ?>
                </form>
            </div>

            <div class="wc-block-components-sidebar wc-block-checkout__sidebar wp-block-woocommerce-checkout-totals-block w-full lg:w-[380px]">
                <div class="bg-white p-6 rounded-lg shadow-sm sticky top-24">
                    <?php do_action('woocommerce_checkout_before_order_review_heading'); ?>
                    
                    <h3 id="order_review_heading" class="text-xl font-semibold mb-6">
                        <?php esc_html_e('Resumo do pedido', 'woocommerce'); ?>
                    </h3>
                    
                    <?php do_action('woocommerce_checkout_before_order_review'); ?>
                    
                    <div id="order_review" class="woocommerce-checkout-review-order">
                        <?php do_action('woocommerce_checkout_order_review'); ?>
                    </div>
                    
                    <?php do_action('woocommerce_checkout_after_order_review'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Adicionar classes Tailwind aos elementos do formulário
wc_enqueue_js("
    jQuery(function($){
        // Campos de input
        $('.wc-block-components-text-input input, .wc-block-components-address-form input').addClass('w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-[#417B5A] focus:border-[#417B5A] bg-white');
        
        // Labels
        $('.wc-block-components-text-input label').addClass('text-sm font-medium text-gray-700');
        
        // Títulos das seções
        $('.wc-block-components-checkout-step__title').addClass('text-xl font-semibold mb-4');
        
        // Botões
        $('.wc-block-components-button').addClass('bg-[#417B5A] hover:bg-[#7ED957] text-white font-semibold py-2 px-4 rounded transition duration-200');
        
        // Link de voltar ao carrinho
        $('.wc-block-components-checkout-return-to-cart-button').addClass('text-[#417B5A] hover:text-[#7ED957] flex items-center gap-2');
        
        // Preços
        $('.wc-block-components-product-price__value, .wc-block-formatted-money-amount').addClass('text-[#FF7E1B] font-semibold');
    });
");
?>