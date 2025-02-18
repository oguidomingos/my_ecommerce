<?php
/**
 * my_ecommerces functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package my_ecommerces
 */

if (!defined('MY_ECOMMERCES_VERSION')) {
    define('MY_ECOMMERCES_VERSION', '0.1.0');
}

if (!defined('MY_ECOMMERCES_TYPOGRAPHY_CLASSES')) {
    define(
        'MY_ECOMMERCES_TYPOGRAPHY_CLASSES',
        'prose prose-neutral max-w-none prose-a:text-primary'
    );
}

if (!function_exists('my_ecommerces_setup')) :
    function my_ecommerces_setup()
    {
        load_theme_textdomain('my_ecommerces', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        // Registrar menus
        register_nav_menus(
            array(
                'menu-1' => __('Primary', 'my_ecommerces'),
                'menu-2' => __('Footer Menu', 'my_ecommerces'),
                'menu-3' => __('Legal Menu', 'my_ecommerces'),
                'menu-shop' => __('Shop Menu', 'my_ecommerces'),
            )
        );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('editor-styles');
        add_editor_style('style-editor.css');
        add_editor_style('style-editor-extra.css');
        add_theme_support('responsive-embeds');
        remove_theme_support('block-templates');
    }
endif;
add_action('after_setup_theme', 'my_ecommerces_setup');

/**
 * Registrar áreas de widgets
 */
function my_ecommerces_widgets_init()
{
    register_sidebar(
        array(
            'name'          => __('Footer', 'my_ecommerces'),
            'id'            => 'sidebar-1',
            'description'   => __('Add widgets here to appear in your footer.', 'my_ecommerces'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Shop Sidebar', 'my_ecommerces'),
            'id'            => 'sidebar-shop',
            'description'   => __('Add widgets here to appear in your shop sidebar.', 'my_ecommerces'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'my_ecommerces_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function my_ecommerces_scripts()
{
    // Estilos principais do tema
    wp_enqueue_style('my_ecommerces-style', get_stylesheet_uri(), array(), MY_ECOMMERCES_VERSION);
    
    // Estilos do WooCommerce
    if (class_exists('WooCommerce')) {
        wp_enqueue_style('my_ecommerces-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), MY_ECOMMERCES_VERSION);
    }
    
    // Estilos do Footer
    wp_enqueue_style('my_ecommerces-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), MY_ECOMMERCES_VERSION);
    
    // Font Awesome
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    
    // Swiper
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // Alpine.js
    wp_enqueue_script('alpine-js', 'https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js', array(), null, true);
    
    // Scripts do tema
    wp_enqueue_script('my_ecommerces-script', get_template_directory_uri() . '/js/script.min.js', array('jquery'), MY_ECOMMERCES_VERSION, true);

    // Script para atualização do carrinho via AJAX
    wp_localize_script('my_ecommerces-script', 'my_ecommerces_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'cart_nonce' => wp_create_nonce('update-cart'),
    ));

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'my_ecommerces_scripts');

/**
 * Enqueue the block editor script.
 */
function my_ecommerces_enqueue_block_editor_script()
{
    if (is_admin()) {
        wp_enqueue_script(
            'my_ecommerces-editor',
            get_template_directory_uri() . '/js/block-editor.min.js',
            array(
                'wp-blocks',
                'wp-edit-post',
            ),
            MY_ECOMMERCES_VERSION,
            true
        );
        wp_add_inline_script('my_ecommerces-editor', "tailwindTypographyClasses = '" . esc_attr(MY_ECOMMERCES_TYPOGRAPHY_CLASSES) . "'.split(' ');", 'before');
    }
}
add_action('enqueue_block_assets', 'my_ecommerces_enqueue_block_editor_script');

/**
 * Add the Tailwind Typography classes to TinyMCE.
 */
function my_ecommerces_tinymce_add_class($settings)
{
    $settings['body_class'] = MY_ECOMMERCES_TYPOGRAPHY_CLASSES;
    return $settings;
}
add_filter('tiny_mce_before_init', 'my_ecommerces_tinymce_add_class');

/**
 * Função para atualizar o mini carrinho via AJAX
 */
function my_ecommerces_get_cart_count() {
    echo WC()->cart->get_cart_contents_count();
    die();
}
add_action('wp_ajax_my_ecommerces_get_cart_count', 'my_ecommerces_get_cart_count');
add_action('wp_ajax_nopriv_my_ecommerces_get_cart_count', 'my_ecommerces_get_cart_count');

/**
 * Função para atualizar a quantidade do item no carrinho via AJAX
 */
function my_ecommerces_update_cart_item() {
    check_ajax_referer('update-cart', 'nonce');

    $cart_item_key = sanitize_text_field($_POST['cart_item_key']);
    $action = sanitize_text_field($_POST['update_action']);
    
    $cart_item = WC()->cart->get_cart_item($cart_item_key);
    
    if ($cart_item) {
        $quantity = $cart_item['quantity'];
        
        if ($action === 'increase') {
            $quantity++;
        } elseif ($action === 'decrease' && $quantity > 1) {
            $quantity--;
        }
        
        WC()->cart->set_quantity($cart_item_key, $quantity);
        
        wp_send_json_success(array(
            'cart_total' => WC()->cart->get_cart_total(),
            'cart_count' => WC()->cart->get_cart_contents_count()
        ));
    }
}
add_action('wp_ajax_my_ecommerces_update_cart_item', 'my_ecommerces_update_cart_item');
add_action('wp_ajax_nopriv_my_ecommerces_update_cart_item', 'my_ecommerces_update_cart_item');
/**
 * Personalizar os campos do checkout do WooCommerce
 */
function my_ecommerces_customize_checkout_fields($fields) {
    // Exemplo de personalização dos campos do checkout
    $fields['billing']['billing_neighborhood'] = array(
        'label'       => __('Bairro', 'my_ecommerces'),
        'placeholder' => _x('Seu bairro', 'placeholder', 'my_ecommerces'),
        'required'    => true,
        'class'       => array('form-row-wide'),
        'clear'       => true
    );

    return $fields;
}
add_filter('woocommerce_checkout_fields', 'my_ecommerces_customize_checkout_fields');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * WooCommerce specific functions
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
}
