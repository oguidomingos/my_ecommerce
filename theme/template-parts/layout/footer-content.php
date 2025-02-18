<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_ecommerces
 */

?>

<footer id="colophon" class="site-footer">
    <div class="footer-container">
        <div class="footer-grid">
            <!-- Coluna 1: Logo e Descrição -->
            <div class="footer-column">
                <div class="footer-logo">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <h3 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        </h3>
                    <?php endif; ?>
                </div>
                <p class="footer-description">
                    <?php echo get_bloginfo('description'); ?>
                </p>
                <div class="footer-social">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Coluna 2: Links Rápidos -->
            <div class="footer-column">
                <h4 class="footer-title"><?php esc_html_e('Links Rápidos', 'my_ecommerces'); ?></h4>
                <?php if ( has_nav_menu( 'menu-2' ) ) : ?>
                    <nav class="footer-menu-nav" aria-label="<?php esc_attr_e( 'Footer Menu', 'my_ecommerces' ); ?>">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-2',
                                'menu_class'     => 'footer-menu',
                                'depth'          => 1,
                            )
                        );
                        ?>
                    </nav>
                <?php endif; ?>
            </div>

            <!-- Coluna 3: Categorias -->
            <div class="footer-column">
                <h4 class="footer-title"><?php esc_html_e('Categorias', 'my_ecommerces'); ?></h4>
                <ul class="footer-categories">
                    <?php
                    $categories = get_terms( array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => true,
                        'parent' => 0,
                        'number' => 6
                    ) );
                    
                    if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
                        foreach ( $categories as $category ) {
                            echo '<li><a href="' . esc_url( get_term_link( $category ) ) . '">' . esc_html( $category->name ) . '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>

            <!-- Coluna 4: Newsletter -->
            <div class="footer-column">
                <h4 class="footer-title"><?php esc_html_e('Newsletter', 'my_ecommerces'); ?></h4>
                <p><?php esc_html_e('Inscreva-se para receber ofertas exclusivas', 'my_ecommerces'); ?></p>
                <div class="footer-newsletter">
                    <form class="newsletter-form">
                        <input type="email" placeholder="<?php esc_attr_e('Seu e-mail', 'my_ecommerces'); ?>" required>
                        <button type="submit"><?php esc_html_e('Inscrever', 'my_ecommerces'); ?></button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <div class="copyright">
                © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
                <?php esc_html_e('Todos os direitos reservados.', 'my_ecommerces'); ?>
            </div>
            <?php if ( has_nav_menu( 'menu-3' ) ) : ?>
                <nav class="footer-legal-menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-3',
                            'menu_class'     => 'legal-menu',
                            'depth'          => 1,
                        )
                    );
                    ?>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</footer><!-- #colophon -->
