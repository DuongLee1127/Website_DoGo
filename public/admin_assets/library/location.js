(function($){
    "use strict";
    var HT = {};

    HT.province = () => {
        $(document).on('change', '.province', function(){
            let _this = $(this)
            let province_id = _this.val()
            $.ajax({
                url: 'ajax/districts',
                method: 'GET',
                data: {
                  province_id: province_id,
                },
                dataType: 'json',
                success: function (response) {
                    $('.districts').html(response.html)
                },
                error: function (xhr) {
                  console.error('Lỗi:', xhr.responseText);
                }
            });
        })
    }
    HT.district = () => {
        $(document).on('change', '.districts', function(){
            let _this = $(this)
            let district_id = _this.val()
            $.ajax({
                url: 'ajax/ward',
                method: 'GET',
                data: {
                  district_id: district_id,
                },
                dataType: 'json',
                success: function (response) {
                    $('.wards').html(response.html)
                },
                error: function (xhr) {
                  console.error('Lỗi:', xhr.responseText);
                }
            });
        })
    }

    $(document).ready(function(){
        HT.province();
        HT.district();
    });

})(jQuery);
