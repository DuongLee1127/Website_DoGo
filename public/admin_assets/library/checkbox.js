(function ($) {
    "use strict";
    var HT = {};
    HT.checkAll = () => {
        $('#checkAll').on('change', function () {
            if ($(this).is(':checked')) {
                $('.checkBoxItem').closest('.tr-active').addClass('checked');
                $(this).closest('.tr-active').addClass('checked');
            } else {
                $('.checkBoxItem').closest('.tr-active').removeClass('checked');
                $(this).closest('.tr-active').removeClass('checked');
            }
            $('.checkBoxItem').prop('checked', $(this).is(':checked'));
        });
    }

    // HT.checkBox = () => {
    //     $('input[type="checkbox"]').on('change', function () {
    //         if ($(this).is(':checked')) {
    //             $(this).closest('.tr-active').addClass('checked');
    //         } else {
    //             $(this).closest('.tr-active').removeClass('checked');
    //         }
    //     });
    // }

    HT.checkBoxItem = () => {
        if($('.checkBoxItem').length){
            $(document).on('click', '.checkBoxItem', function(){
                let _this = $(this)
                HT.changeBackground(_this);
                HT.allChecked();
            })
        }
    }

    HT.changeBackground = (object) => {
        let isChecked = object.prop('checked')
        if(isChecked){
            object.closest('.tr-active').addClass('checked');
        } else {
            object.closest('.tr-active').removeClass('checked');
        }
    }

    HT.allChecked = () => {
        let allChecked = $('.checkBoxItem:checked').length === $('.checkBoxItem').length
        $('#checkAll').prop('checked', allChecked);
        HT.changeBackground($('#checkAll'));
    }
    $(document).ready(function () {
        HT.checkAll();
        // HT.checkBox();
        HT.checkBoxItem();
    });
})(jQuery);
