(function ($) {
    "use strict";
    var HT = {}

    HT.seoPreview = () => {
        $('input[name=keywordseo]').on('keyup', function(){
            let input = $(this)
            let value = input.val()
            $('.title-name').html(value)
        })
         $('input[name=link]').on('keyup', function(){
            let input = $(this)
            let value = input.val()
            let urlBase = $('.baseUrl').html()
            let result = urlBase + value
            $('.urlSeo').html(result)
        })
        $('textarea[name=descriptionSeo]').on('keyup', function(){
            let input = $(this)
            let value = input.val()
            $('.search-description').html(value)
        })
    }



    $(document).ready(function () {
        HT.seoPreview();
    });
})(jQuery);
