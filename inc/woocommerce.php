<?php
/**
 * WooCommerce specific functions
 *
 * @package my_ecommerces
 */

/**
 * Remove default WooCommerce wrapper
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// Remover título do carrinho
add_filter('woocommerce_show_page_title', '__return_false');

/**
 * Add custom WooCommerce wrapper
 */
function my_ecommerces_woocommerce_wrapper_before()
{
    ?>
    <main id="primary" class="site-main">
        <div class="container woocommerce-content">
    <?php
}
add_action('woocommerce_before_main_content', 'my_ecommerces_woocommerce_wrapper_before');

function my_ecommerces_woocommerce_wrapper_after()
{
    ?>
        </div>
    </main>
    <?php
}
add_action('woocommerce_after_main_content', 'my_ecommerces_woocommerce_wrapper_after');

/**
 * Personalizar número de produtos por linha
 */
function my_ecommerces_loop_columns()
{
    return 3; // Exibe 3 produtos por linha
}
add_filter('loop_shop_columns', 'my_ecommerces_loop_columns');

/**
 * Personalizar número de produtos por página
 */
function my_ecommerces_products_per_page()
{
    return 12; // Exibe 12 produtos por página
}
add_filter('loop_shop_per_page', 'my_ecommerces_products_per_page');

/**
 * Personalizar as opções de ordenação
 */
function my_ecommerces_catalog_orderby($orderby)
{
    $orderby = array(
        'menu_order' => __('Ordenação padrão', 'my_ecommerces'),
        'popularity' => __('Mais vendidos', 'my_ecommerces'),
        'rating'     => __('Melhor avaliados', 'my_ecommerces'),
        'date'       => __('Mais recentes', 'my_ecommerces'),
        'price'      => __('Menor preço', 'my_ecommerces'),
        'price-desc' => __('Maior preço', 'my_ecommerces'),
    );
    return $orderby;
}
add_filter('woocommerce_catalog_orderby', 'my_ecommerces_catalog_orderby');

/**
 * Adicionar badges personalizados aos produtos
 */
function my_ecommerces_product_badges()
{
    global $product;

    // Badge de Novo (para produtos adicionados nos últimos 7 dias)
    $days_old = (time() - strtotime($product->get_date_created())) / (60 * 60 * 24);
    if ($days_old < 7) {
        echo '<span class="badge badge-new">' . esc_html__('Novo', 'my_ecommerces') . '</span>';
    }

    // Badge de Promoção
    if ($product->is_on_sale()) {
        $regular_price = (float) $product->get_regular_price();
        $sale_price = (float) $product->get_sale_price();
        if ($regular_price > 0) {
            $percentage = round(100 - ($sale_price / $regular_price * 100));
            echo '<span class="badge badge-sale">-' . $percentage . '%</span>';
        }
    }

    // Badge de Frete Grátis
    if ($product->get_shipping_class()) {
        $shipping_class = $product->get_shipping_class();
        if ($shipping_class === 'free-shipping') {
            echo '<span class="badge badge-free-shipping">' . esc_html__('Frete Grátis', 'my_ecommerces') . '</span>';
        }
    }
}
add_action('woocommerce_before_shop_loop_item_title', 'my_ecommerces_product_badges', 5);

/**
 * Adicionar contagem de produtos à descrição da categoria
 */
function my_ecommerces_category_description($category)
{
    if ($category) {
        $count = $category->count;
        echo '<div class="category-count">';
        printf(_n('%s Produto', '%s Produtos', $count, 'my_ecommerces'), number_format_i18n($count));
        echo '</div>';
    }
}
add_action('woocommerce_archive_description', 'my_ecommerces_category_description', 15);

/**
 * Personalizar os campos do checkout
 */
function my_ecommerces_checkout_fields($fields)
{
    // Remover campos desnecessários
    unset($fields['billing']['billing_company']);
    unset($fields['shipping']['shipping_company']);

    // Adicionar campo de bairro
    $fields['billing']['billing_neighborhood'] = array(
        'label'       => __('Bairro', 'my_ecommerces'),
        'placeholder' => _x('Seu bairro', 'placeholder', 'my_ecommerces'),
        'required'    => true,
        'class'       => array('form-row-wide'),
        'clear'       => true
    );

    return $fields;
}
add_filter('woocommerce_checkout_fields', 'my_ecommerces_checkout_fields');

/**
 * Adicionar informações extras aos produtos
 */
function my_ecommerces_product_extra_info()
{
    global $product;

    echo '<div class="product-extra-info">';
    
    // Prazo de entrega estimado
    echo '<div class="delivery-estimate">';
    echo '<i class="fas fa-truck"></i> ';
    echo esc_html__('Prazo de entrega: 3-5 dias úteis', 'my_ecommerces');
    echo '</div>';

    // Garantia
    echo '<div class="warranty-info">';
    echo '<i class="fas fa-shield-alt"></i> ';
    echo esc_html__('Garantia de 30 dias', 'my_ecommerces');
    echo '</div>';

    // Pagamento seguro
    echo '<div class="secure-payment">';
    echo '<i class="fas fa-lock"></i> ';
    echo esc_html__('Pagamento 100% Seguro', 'my_ecommerces');
    echo '</div>';

    echo '</div>';
}
add_action('woocommerce_single_product_summary', 'my_ecommerces_product_extra_info', 25);

/**
 * Atualizar fragmentos do carrinho via AJAX
 */
function my_ecommerces_add_to_cart_fragments($fragments)
{
    ob_start();
    ?>
    <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    <?php
    $fragments['.cart-count'] = ob_get_clean();

    ob_start();
    ?>
    <span class="cart-total"><?php echo WC()->cart->get_cart_total(); ?></span>
    <?php
    $fragments['.cart-total'] = ob_get_clean();

    return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'my_ecommerces_add_to_cart_fragments');