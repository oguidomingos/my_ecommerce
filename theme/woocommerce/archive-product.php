<?php
/**
 * Template para a página de categorias do WooCommerce.
 *
 * Personaliza a exibição da página de categorias, garantindo uma estilização
 * responsiva e compatível com WooCommerce.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<div class="container mx-auto px-4 py-10">
    <!-- Título da Categoria -->
    <header class="mb-6">
        <h1 class="text-3xl font-bold text-[#2B2B2B] mb-2">
            <?php woocommerce_page_title(); ?>
        </h1>
        <p class="text-gray-700">
            <?php echo category_description(); ?>
        </p>
    </header>

    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Sidebar de Filtros -->
        <aside class="w-full lg:w-1/4 bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-lg font-bold mb-4">Filtrar Produtos</h2>
            <?php if (is_active_sidebar('sidebar-shop')) : ?>
                <?php dynamic_sidebar('sidebar-shop'); ?>
            <?php else : ?>
                <p class="text-gray-500">Nenhum filtro disponível.</p>
            <?php endif; ?>
        </aside>

        <!-- Listagem de Produtos -->
        <main class="w-full lg:w-3/4">
            <?php
            if (woocommerce_product_loop()) : ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <?php
                    while (have_posts()) : the_post();
                        global $product; ?>
                        <div class="bg-white rounded-xl shadow-md p-4 transition-all duration-300 transform group hover:scale-105 hover:shadow-xl relative">
                            <?php
                            if ($product->is_on_sale()) {
                                $regular_price = (float) $product->get_regular_price();
                                $sale_price = (float) $product->get_sale_price();
                                if ($regular_price > 0) {
                                    $percentage = round((($regular_price - $sale_price) / $regular_price) * 100);
                                    echo '<span class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">-' . $percentage . '%</span>';
                                }
                            }
                            ?>

                            <!-- Imagem do Produto -->
                            <a href="<?php the_permalink(); ?>" class="block overflow-hidden rounded-lg aspect-square">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('woocommerce_thumbnail', ['class' => 'w-full h-full object-cover transition-transform duration-300 group-hover:scale-110']); ?>
                                <?php else : ?>
                                    <img src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
                                <?php endif; ?>
                            </a>

                            <!-- Informações do Produto -->
                            <div class="mt-4 space-y-2">
                                <h3 class="text-sm font-medium text-[#2B2B2B] line-clamp-2">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-[#5E2D89]">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <?php if ($product->is_on_sale()) : ?>
                                    <p class="text-gray-400 line-through text-sm">
                                        <?php echo $product->get_regular_price_html(); ?>
                                    </p>
                                <?php endif; ?>
                                
                                <div class="text-[#FF7E1B] font-bold text-lg">
                                    <?php echo $product->get_price_html(); ?>
                                </div>
                                
                                <?php if ($product->is_on_sale()) : ?>
                                    <?php
                                    $sale_price = $product->get_sale_price();
                                    $installment = number_format($sale_price / 3, 2, ',', '.');
                                    ?>
                                    <p class="text-[#2B2B2B] text-sm">
                                        ou <span class="text-[#7ED957] font-bold">3x de R$ <?php echo $installment; ?></span> sem juros
                                    </p>
                                <?php endif; ?>
                            </div>

                            <!-- Botão Comprar -->
                            <div class="mt-4">
                                <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="bg-[#417B5A] text-white px-4 py-2 rounded-full hover:bg-[#7ED957] transition-colors duration-300 w-full block text-center text-sm">
                                    Comprar
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <!-- Paginação -->
                <div class="mt-8 flex justify-center">
                    <?php woocommerce_pagination(); ?>
                </div>
            <?php else : ?>
                <p class="text-gray-700">Nenhum produto encontrado nesta categoria.</p>
            <?php endif; ?>
        </main>
    </div>
</div>

<?php get_footer(); ?>