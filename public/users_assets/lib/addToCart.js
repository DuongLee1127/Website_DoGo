(function($){
    "use strict";
    var HT = {};

    HT.addToCart = () => {
        $(document).on('click', '.add-to-cart-items', function(){
            let id_product = $(this).data('id')
                    console.log('abc'+id_product)
            $.ajax({
                url: 'ajax/addToCart',
                method: 'GET',
                data: {
                  id_product: id_product,
                },
                dataType: 'json',
                success: function (response) {
                    
                },
                error: function (xhr) {
                  console.error('Lỗi:', xhr.responseText);
                }
            });
        })
    }

    $(document).ready(function(){
        HT.addToCart();
    });

})(jQuery);
