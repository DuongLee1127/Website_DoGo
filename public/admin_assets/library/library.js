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


    $(document).ready(function () {
        HT.status();
    });
})(jQuery);
