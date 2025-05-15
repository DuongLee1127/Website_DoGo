(function ($) {
    "use strict";
    var HT = {};
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    });


    HT.status = () => {
        $(document).on('change', '.status', function () {
            let _this = $(this)
            let status = _this.val()
            let publish = _this.attr('data-publish')
            let id = _this.attr('data-modalId')
            // var _token = $('meta[name="csrf-token"]').attr('content')
            // console.log(status)
            $.ajax({
                url: 'ajax/status',
                method: 'POST',
                data: {
                    publish: publish,
                    id: id,
                    //   _token: _token,
                    status: status
                },
                success: function (response) {

                },
                error: function (xhr, status, error) {
                    console.error('Lỗi:', status, error);
                    console.log('Phản hồi từ server:', xhr.responseText)
                }
            });
        })
    }

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
        HT.status();
        HT.checkAll();
        // HT.checkBox();
        HT.checkBoxItem();
    });
})(jQuery);
