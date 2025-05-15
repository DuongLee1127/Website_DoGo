
(function ($) {
    "use strict";
    var HT = {};


    HT.uploadImage = () => {
        var $inputHidden = $('#uploadi');
        var $imagePreview = $('#preview');

        // Kiểm tra trình duyệt có hỗ trợ MutationObserver không
        if (typeof MutationObserver !== 'undefined') {
            var observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'value') {
                        // Lấy giá trị mới từ input hidden và cập nhật cho thẻ img
                        var newValue = $inputHidden.val();
                        $imagePreview.attr('src', newValue);
                    }
                });
            });

            // Bắt đầu quan sát sự thay đổi của thuộc tính value
            observer.observe($inputHidden[0], {
                attributes: true,
                attributeFilter: ['value']
            });
        } else {
            console.log('Trình duyệt không hỗ trợ MutationObserver.');
        }
    }


    $(document).ready(function () {
        HT.uploadImage();
    });
})(jQuery);
