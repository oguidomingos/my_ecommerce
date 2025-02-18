<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_ecommerces
 */

?>

<header id="masthead" class="site-header" x-data="{ cartOpen: false }">
    <div class="header-container">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="contact-info">
                    <span class="phone">
                        <i class="fas fa-phone"></i>
                        <?php echo get_theme_mod('header_phone', '(11) 1234-5678'); ?>
                    </span>
                    <span class="email">
                        <i class="fas fa-envelope"></i>
                        <?php echo get_theme_mod('header_email', 'contato@exemplo.com.br'); ?>
                    </span>
                </div>
            </div>
        </div>

        <!-- Main Header -->
        <div class="main-header">
            <div class="container">
                <!-- Logo -->
                <div class="site-branding">
                    <?php
                    if (has_custom_logo()) :
                        the_custom_logo();
                    else :
                        if (is_front_page()) :
                    ?>
                            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                        <?php
                        else :
                        ?>
                            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
                    <?php
                        endif;
                    endif;
                    ?>
                </div>

                <!-- Search Form -->
                <div class="header-search">
                    <?php get_product_search_form(); ?>
                </div>

                <!-- Header Actions -->
                <div class="header-actions">
                    <!-- My Account -->
                    <div class="account-link">
                        <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>">
                            <i class="fas fa-user"></i>
                            <span>Minha Conta</span>
                        </a>
                    </div>

                    <!-- Cart -->
                    <div class="cart-link">
                        <button type="button" @click.prevent="cartOpen = true" class="cart-contents">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                            <span class="cart-total"><?php echo WC()->cart->get_cart_total(); ?></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'my_ecommerces'); ?>">
            <div class="container">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                    <?php esc_html_e('Menu', 'my_ecommerces'); ?>
                </button>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'nav-menu',
                        'container_class' => 'primary-menu-container',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
                    )
                );
                ?>
            </div>
        </nav>
    </div>
    
    <?php get_template_part('template-parts/components/cart-offcanvas'); ?>
    
</header><!-- #masthead -->
