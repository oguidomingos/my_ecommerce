<?php
/**
 * Template part for displaying the off-canvas cart
 *
 * @package my_ecommerces
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<div @keydown.window.escape="cartOpen = false">
    <!-- Overlay -->
    <div x-show="cartOpen" 
         class="fixed inset-0 bg-black bg-opacity-50 z-40" 
         @click="cartOpen = false"
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
    </div>

    <!-- Carrinho Sidebar -->
    <div x-show="cartOpen"
         class="fixed top-0 right-0 w-96 h-full bg-white shadow-lg z-50 overflow-hidden"
         x-transition:enter="transform transition ease-in-out duration-300"
         x-transition:enter-start="translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transform transition ease-in-out duration-300"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full">
        
        <div class="flex flex-col h-full">
            <!-- Cabeçalho -->
            <div class="flex items-center justify-between p-4 border-b">
                <h2 class="text-lg font-bold"><?php esc_html_e('Carrinho', 'my_ecommerces'); ?></h2>
                <button @click="cartOpen = false" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only"><?php esc_html_e('Fechar carrinho', 'my_ecommerces'); ?></span>
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Conteúdo do Carrinho -->
            <div class="flex-1 overflow-y-auto p-4">
                <?php if (WC()->cart->is_empty()) : ?>
                    <div class="text-center py-8">
                        <i class="fas fa-shopping-cart text-4xl text-gray-300 mb-4"></i>
                        <p><?php esc_html_e('Seu carrinho está vazio', 'my_ecommerces'); ?></p>
                    </div>
                <?php else : ?>
                    <div class="space-y-4">
                        <?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) : 
                            $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                            $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
                            
                            if ($_product && $_product->exists() && $cart_item['quantity'] > 0) : ?>
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0 w-20 h-20">
                                        <?php echo $_product->get_image('thumbnail'); ?>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="text-sm font-medium">
                                            <?php echo $_product->get_name(); ?>
                                        </h3>
                                        <div class="mt-1 flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                <button class="text-gray-500 hover:text-gray-700" 
                                                        class="quantity-decrease" data-key="<?php echo $cart_item_key; ?>">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <span class="text-sm"><?php echo $cart_item['quantity']; ?></span>
                                                <button class="text-gray-500 hover:text-gray-700"
                                                        class="quantity-increase" data-key="<?php echo $cart_item_key; ?>">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="text-sm font-medium text-[#417B5A]">
                                                <?php echo WC()->cart->get_product_subtotal($_product, $cart_item['quantity']); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <?php
                                        echo apply_filters('woocommerce_cart_item_remove_link',
                                            sprintf('<a href="%s" class="text-red-500 hover:text-red-700" aria-label="%s"><i class="fas fa-times"></i></a>',
                                                esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                esc_html__('Remover item', 'my_ecommerces')
                                            ),
                                            $cart_item_key
                                        );
                                        ?>
                                    </div>
                                </div>
                            <?php endif;
                        endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Rodapé do Carrinho -->
            <?php if (!WC()->cart->is_empty()) : ?>
                <div class="border-t p-4 space-y-4">
                    <!-- Cupom -->
                    <form id="apply-coupon-form" class="flex space-x-2">
                        <input type="text" id="coupon-code" class="flex-1 border rounded-lg px-4 py-2" 
                               placeholder="<?php esc_attr_e('Código do cupom', 'my_ecommerces'); ?>">
                        <button type="submit" name="apply_coupon" class="bg-gray-800 text-white px-4 py-2 rounded-lg">
                            <?php esc_html_e('Aplicar', 'my_ecommerces'); ?>
                        </button>
                    </form>

                    <!-- Totais -->
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span><?php esc_html_e('Subtotal:', 'my_ecommerces'); ?></span>
                            <span class="font-medium"><?php echo WC()->cart->get_cart_subtotal(); ?></span>
                        </div>
                        <?php if (WC()->cart->get_cart_discount_total() > 0) : ?>
                            <div class="flex justify-between text-sm text-green-600">
                                <span><?php esc_html_e('Desconto:', 'my_ecommerces'); ?></span>
                                <span>-<?php echo WC()->cart->get_cart_discount_total(); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="flex justify-between text-lg font-bold">
                            <span><?php esc_html_e('Total:', 'my_ecommerces'); ?></span>
                            <span class="text-[#417B5A]"><?php echo WC()->cart->get_cart_total(); ?></span>
                        </div>
                    </div>

                    <!-- Botão Finalizar -->
                    <a href="<?php echo esc_url(wc_get_checkout_url()); ?>" 
                       class="block w-full bg-[#417B5A] text-white text-center py-3 rounded-lg hover:bg-[#7ED957] transition">
                        <?php esc_html_e('Finalizar Compra', 'my_ecommerces'); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>