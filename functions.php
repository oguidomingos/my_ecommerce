<?php
/**
 * my_ecommerces functions and definitions
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

// Remover títulos do WooCommerce
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_filter('woocommerce_show_page_title', '__return_false');
add_filter('woocommerce_cart_title', '__return_false');

// Remover títulos específicos da página do carrinho
add_filter('the_title', function($title, $id) {
    if (is_cart() && in_the_loop()) {
        return '';
    }
    return $title;
}, 10, 2);

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