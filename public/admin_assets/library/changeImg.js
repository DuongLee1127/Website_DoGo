(function ($) {
    "use strict";
    var HT = {};
    HT.changImg = () => {
        $('[id-js="product"]').on('click', function(){
            $('#product-modal').addClass('show')
        });
        $('#product-modal').on('click', function (e) {
            if (!$(e.target).closest('#preview-product').length) {
            $(this).removeClass('show');
        }
});
    }
   $(document).ready(function () {
        HT.changImg();
    });
})(jQuery);
