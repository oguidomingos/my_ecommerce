jQuery(function($) {
    function updateCartUI(response) {
        $('.cart-count').text(response.cart_count);
        $('.cart-total').html(response.cart_total);
    }

    // Atualizar quantidade do item no carrinho
    function updateCartItemQuantity(cartItemKey, action) {
        $.ajax({
            url: my_ecommerces_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'my_ecommerces_update_cart_item',
                cart_item_key: cartItemKey,
                update_action: action,
                nonce: my_ecommerces_ajax.cart_nonce
            },
            success: function(response) {
                if (response.success) {
                    updateCartUI(response.data);
                }
            }
        });
    }

    // Manipular cliques nos botões de quantidade
    $(document).on('click', '.quantity-decrease', function(e) {
        e.preventDefault();
        const cartItemKey = $(this).data('key');
        updateCartItemQuantity(cartItemKey, 'decrease');
    });

    $(document).on('click', '.quantity-increase', function(e) {
        e.preventDefault();
        const cartItemKey = $(this).data('key');
        updateCartItemQuantity(cartItemKey, 'increase');
    });

    // Aplicar cupom de desconto
    $('#apply-coupon-form').on('submit', function(e) {
        e.preventDefault();
        const couponCode = $('#coupon-code').val();
        
        if (couponCode) {
            $.ajax({
                url: my_ecommerces_ajax.ajax_url,
                type: 'POST',
                data: {
                    action: 'apply_coupon',
                    coupon_code: couponCode,
                    security: my_ecommerces_ajax.cart_nonce
                },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    }
                }
            });
        }
    });

    // Atualização automática do carrinho quando item é removido
    $(document.body).on('removed_from_cart', function() {
        $.ajax({
            url: my_ecommerces_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'my_ecommerces_get_cart_count'
            },
            success: function(response) {
                $('.cart-count').text(response);
            }
        });
    });
});