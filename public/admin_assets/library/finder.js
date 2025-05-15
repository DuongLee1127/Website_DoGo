(function ($) {
    "use strict";
    var HT = {};

    HT.uploadImage = () => {
        $('#upload-image').click(function(){
            HT.setupCkFinder($('#upload-image'));
        })
    }

    HT.setupCkFinder = (object) => {
        CKFinder.popup({
        chooseFiles: true,
        onInit: function(finder) {
            finder.on('files:choose', function(evt) {
                var file = evt.data.files.first();
                document.getElementById(object).value = file.getUrl();
                finder.request('closePopup');
            });
            finder.on('file:choose:resizedImage', function(evt) {
                document.getElementById(object).value = evt.data.resizedUrl;
                finder.request('closePopup');
            });
        }
    });
    }

    $(document).ready(function(){
        HT.uploadImage();
    });
})(jQuery);

