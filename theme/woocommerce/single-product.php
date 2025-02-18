<?php
/**
 * Template para exibição do produto individual no WooCommerce.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php while (have_posts()) : the_post(); global $product; ?>
            <div class="bg-gradient-to-b from-[#F5F5F5] py-6 to-white">
                <div class="container mx-auto">
                    <!-- Layout Responsivo -->
                    <div class="flex flex-col lg:flex-row gap-10">
                        <!-- Galeria de Imagens -->
                        <div class="w-full lg:w-1/2">
                            <?php
                            $attachment_ids = $product->get_gallery_image_ids();
                            $featured_image_id = $product->get_image_id();
                            array_unshift($attachment_ids, $featured_image_id);
                            ?>

                            <!-- Carrossel Principal -->
                            <div class="swiper product-main-swiper mb-4">
                                <div class="swiper-wrapper">
                                    <?php foreach ($attachment_ids as $attachment_id) : ?>
                                        <div class="swiper-slide">
                                            <div class="aspect-square bg-white rounded-xl overflow-hidden">
                                                <?php echo wp_get_attachment_image($attachment_id, 'full', false, array(
                                                    'class' => 'w-full h-full object-contain'
                                                )); ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>

                            <!-- Miniaturas -->
                            <div class="swiper product-thumbs-swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($attachment_ids as $attachment_id) : ?>
                                        <div class="swiper-slide cursor-pointer">
                                            <?php echo wp_get_attachment_image($attachment_id, 'thumbnail', false, array(
                                                'class' => 'w-full h-20 object-cover rounded-lg'
                                            )); ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Informações do Produto -->
                        <div class="w-full lg:w-1/2 bg-white rounded-xl shadow-lg p-6">
                            <!-- Nome do Produto -->
                            <h1 class="text-3xl font-bold text-[#2B2B2B] mb-2"><?php the_title(); ?></h1>

                            <!-- Avaliação e Preço -->
                            <div class="flex items-center space-x-4 mb-4">
                                <?php do_action('woocommerce_template_single_rating'); ?>
                                <span class="text-xl font-semibold text-[#FF7E1B]"><?php echo $product->get_price_html(); ?></span>
                            </div>

                            <!-- Descrição Curta -->
                            <div class="text-gray-600 mb-4"><?php do_action('woocommerce_template_single_excerpt'); ?></div>

                            <!-- Formulário de Compra -->
                            <form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
                                <!-- Quantidade -->
                                <div class="flex items-center gap-4 mb-4">
                                    <label for="quantity" class="font-medium">Quantidade:</label>
                                    <div class="flex items-center border border-gray-300 rounded-lg">
                                        <button type="button" class="px-3 py-2 bg-gray-50 hover:bg-gray-100 quantity-btn minus">-</button>
                                        <input type="number" id="quantity" name="quantity" value="1" min="1" max="<?php echo esc_attr($product->get_stock_quantity()); ?>" class="w-16 px-3 py-2 text-center border-x border-gray-300">
                                        <button type="button" class="px-3 py-2 bg-gray-50 hover:bg-gray-100 quantity-btn plus">+</button>
                                    </div>
                                </div>

                                <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>">

                                <!-- Botão Comprar -->
                                <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" 
                                   data-quantity="1" 
                                   data-product_id="<?php echo esc_attr($product->get_id()); ?>" 
                                   class="add_to_cart_button ajax_add_to_cart w-full bg-[#417B5A] text-white px-6 py-3 rounded-full hover:bg-[#7ED957] transition-colors flex items-center justify-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Adicionar ao Carrinho
                                </a>
                            </form>

                            <!-- Informações Extras -->
                            <div class="mt-6 space-y-2 text-gray-700">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Frete grátis para compras acima de R$ 199,00</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                    <span>Garantia de 30 dias</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8V7a4 4 0 00-8 0v4"></path>
                                    </svg>
                                    <span>Pagamento 100% Seguro</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Produtos Relacionados -->
                    <div class="mt-10">
                        <?php
                        $related_products = array_filter(array_map('wc_get_product', wc_get_related_products($product->get_id(), 4, $product->get_upsell_ids())), 'wc_products_array_filter_visible');

                        if ($related_products) : ?>
                            <div class="related products mt-10">
                                <h2 class="text-2xl font-bold mb-6">Produtos Relacionados</h2>
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                                    <?php foreach ($related_products as $related_product) : ?>
                                        <div class="bg-white rounded-lg shadow-md p-4">
                                            <a href="<?php echo esc_url($related_product->get_permalink()); ?>" class="block">
                                                <?php echo $related_product->get_image('woocommerce_thumbnail', ['class' => 'w-full h-auto rounded-lg']); ?>
                                                <h3 class="text-sm font-medium text-[#2B2B2B] mt-3"><?php echo $related_product->get_name(); ?></h3>
                                                <p class="text-[#FF7E1B] font-bold text-lg mt-2"><?php echo $related_product->get_price_html(); ?></p>
                                            </a>
                                            <a href="<?php echo esc_url($related_product->add_to_cart_url()); ?>"
                                               data-quantity="1"
                                               data-product_id="<?php echo esc_attr($related_product->get_id()); ?>"
                                               class="add_to_cart_button ajax_add_to_cart w-full mt-4 bg-[#417B5A] text-white px-4 py-2 rounded-full hover:bg-[#7ED957] transition-colors text-center block">
                                                Adicionar
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Modal de Confirmação -->
            <div id="cart-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-xl p-6 max-w-md w-full mx-4">
                    <h3 class="text-xl font-bold text-[#2B2B2B] mb-4">Produto adicionado ao carrinho!</h3>
                    <p class="text-gray-600 mb-6">O que você deseja fazer agora?</p>
                    <div class="flex gap-4">
                        <button onclick="window.location.href='<?php echo wc_get_cart_url(); ?>'" class="flex-1 bg-[#417B5A] text-white px-4 py-2 rounded-full hover:bg-[#7ED957] transition-colors">
                            Finalizar Compra
                        </button>
                        <button onclick="document.getElementById('cart-modal').classList.add('hidden')" class="flex-1 bg-gray-200 text-gray-700 px-4 py-2 rounded-full hover:bg-gray-300 transition-colors">
                            Continuar Comprando
                        </button>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </main>
</div>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
jQuery(function($) {
    // Inicialização dos Swipers
    var thumbsSwiper = new Swiper(".product-thumbs-swiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var mainSwiper = new Swiper(".product-main-swiper", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: thumbsSwiper,
        },
    });

    // Controles de quantidade
    $('.quantity-btn.minus').click(function() {
        var input = $(this).closest('.flex').find('input[name="quantity"]');
        var value = parseInt(input.val());
        if (value > 1) {
            input.val(value - 1);
        }
    });

    $('.quantity-btn.plus').click(function() {
        var input = $(this).closest('.flex').find('input[name="quantity"]');
        var value = parseInt(input.val());
        var max = input.attr('max');
        if (!max || value < parseInt(max)) {
            input.val(value + 1);
        }
    });

    // Mostrar modal quando produto é adicionado ao carrinho
    $(document.body).on('added_to_cart', function() {
        $('#cart-modal').removeClass('hidden');
    });
});
</script>

<?php get_footer(); ?>