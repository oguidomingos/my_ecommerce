<?php
/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page">
    <a href="#content" class="sr-only">Skip to content</a>

    <div class="bg-[#2B2B2B]">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between py-2 px-4 text-white gap-4">
            <!-- Logo -->
            <div class="flex items-center">
                <span class="text-xl md:text-2xl font-bold text-white">
                    <span class="text-[#7ED957]">SENHOR</span>BICHO®
                </span>
            </div>

            <!-- Search Bar - Esconde em mobile -->
            <div class="flex-grow mx-0 md:mx-4 w-full md:w-auto hidden md:block">
                <div class="relative">
                    <input type="text" placeholder="Olá Humano, o que você busca?" 
                           class="w-full px-4 py-2 rounded-full text-[#2B2B2B] bg-white focus:outline-none focus:ring-2 focus:ring-[#7ED957]">
                    <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#7ED957] p-2 rounded-full">
                        <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/search.svg" alt="search" class="w-5 h-5">
                    </button>
                </div>
            </div>

            <!-- Menu Icons -->
            <div class="flex space-x-6">
                <!-- Search Icon - Aparece apenas em mobile -->
                <button class="md:hidden flex items-center space-x-1 text-sm hover:text-[#7ED957]" id="mobileSearchBtn">
                    <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/search.svg" alt="search" class="w-4 h-4">
                </button>

                <a href="#" class="hidden md:flex items-center space-x-1 text-sm hover:text-[#7ED957]">
                    <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/telephone-fill.svg" alt="phone" class="w-4 h-4">
                    <span>Atendimento</span>
                </a>
                <a href="#" class="flex items-center space-x-1 text-sm hover:text-[#7ED957]">
                    <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/person-fill.svg" alt="account" class="w-4 h-4">
                    <span class="hidden md:inline">Minha conta</span>
                </a>
                <a href="<?php echo wc_get_cart_url(); ?>" class="relative flex items-center space-x-1 text-sm hover:text-[#7ED957]">
                    <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/cart-fill.svg" alt="cart" class="w-4 h-4">
                    <span id="cart-count" class="absolute -top-2 -right-2 bg-[#7ED957] text-[#2B2B2B] text-xs rounded-full w-5 h-5 flex items-center justify-center">
                        <?php echo WC()->cart->get_cart_contents_count(); ?>
                    </span>
                </a>
            </div>
        </div>

        <!-- Search Bar Mobile - Inicialmente escondida -->
        <div id="mobileSearch" class="md:hidden container mx-auto px-4 py-2 hidden">
            <div class="relative">
                <input type="text" placeholder="Olá Humano, o que você busca?" 
                       class="w-full px-4 py-2 rounded-full text-[#2B2B2B] bg-white focus:outline-none focus:ring-2 focus:ring-[#7ED957]">
                <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#7ED957] p-2 rounded-full">
                    <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/search.svg" alt="search" class="w-5 h-5">
                </button>
            </div>
        </div>
    </div>

    <!-- Categories Menu -->
    <div class="bg-white border-t border-[#417B5A] overflow-x-auto">
        <div class="container mx-auto flex justify-start md:justify-center items-center space-x-4 py-2 px-4 text-[#2B2B2B] text-sm font-medium whitespace-nowrap">
            <div class="relative group">
                <button id="categoriesButton" class="flex items-center space-x-2 text-[#2B2B2B] focus:outline-none">
                    <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/list.svg" alt="categories" class="w-5 h-5">
                    <span>Todas categorias</span>
                </button>
                <div id="categoriesMenu" class="absolute left-0 mt-2 bg-white shadow-lg rounded-md w-48 hidden group-hover:block z-50">
                    <a href="#" class="block px-4 py-2 text-[#2B2B2B] hover:bg-[#7ED957] hover:text-white">Categoria 1</a>
                    <a href="#" class="block px-4 py-2 text-[#2B2B2B] hover:bg-[#7ED957] hover:text-white">Categoria 2</a>
                    <a href="#" class="block px-4 py-2 text-[#2B2B2B] hover:bg-[#7ED957] hover:text-white">Categoria 3</a>
                    <a href="#" class="block px-4 py-2 text-[#2B2B2B] hover:bg-[#7ED957] hover:text-white">Categoria 4</a>
                </div>
            </div>
            <a href="#" class="text-[#7ED957]">Mais Vendidos</a>
            <a href="#" class="hover:text-[#417B5A]">Enxoval para seu Pet</a>
            <a href="#" class="hover:text-[#417B5A]">Cama Dupla Face</a>
            <a href="#" class="hover:text-[#417B5A]">Cama com Zíper</a>
            <a href="#" class="hover:text-[#417B5A]">Waterblock com Proteção UV</a>
            <a href="#" class="hover:text-[#417B5A]">Cama Iglu</a>
        </div>
    </div>

    <script>
        // Toggle mobile search
        document.getElementById('mobileSearchBtn').addEventListener('click', function() {
            document.getElementById('mobileSearch').classList.toggle('hidden');
        });

        // Categories menu
        const categoriesButton = document.getElementById("categoriesButton");
        const categoriesMenu = document.getElementById("categoriesMenu");

        categoriesButton.addEventListener("click", () => {
            categoriesMenu.classList.toggle("hidden");
        });

        // Atualizar contador do carrinho
        jQuery(function($) {
            // Atualiza o contador quando um produto é adicionado via AJAX
            $(document.body).on('added_to_cart', function(event, fragments, cart_hash, $button) {
                if (fragments && fragments['div.widget_shopping_cart_content']) {
                    // Atualiza o contador do carrinho
                    const cartCount = $(fragments['div.widget_shopping_cart_content'])
                        .find('.cart_list')
                        .children()
                        .length;
                    
                    $('#cart-count').text(cartCount);
                }
            });
        });
    </script>

    <div id="content">
