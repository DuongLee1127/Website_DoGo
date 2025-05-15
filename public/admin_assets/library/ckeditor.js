
(function ($) {
    "use strict";
    var HT = {};

    HT.uploadImage = () => {
        // Kiểm tra textarea có tồn tại không
        if ($('.ck-editor')) {
            $('.ck-editor').each(function () {
                let editor = $(this)
                let elementId = editor.attr('id')
                HT.ckeditor4(elementId);
            });
        }

    }
    HT.ckeditor4 = (elementId) => {
        CKEDITOR.replace(elementId, {
            height: 250,
            removeButtons: '',
            entities: true,
            allowedContent: true,
            removePlugins: 'exportpdf',
            toolbarGroups: [
                { name: 'clipboard', groups: ['clipboard', 'undo'] },
                { name: 'editing', groups: ['find', 'selection', 'spellchecker'] },
                { name: 'links' },
                { name: 'insert' },
                { name: 'form' },
                { name: 'tools' },
                { name: 'document', groups: ['mode', 'document', 'doctools'] },
                { name: 'colors' },
                { name: 'others' },
                '/',
                { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
                { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi'] },
                { name: 'style' },
            ],
            extraPlugins: 'uploadimage,clipboard',
            uploadUrl: '/uploads',
            filebrowserUploadMethod: 'form',
            clipboard_handleImages: true,
            filebrowserBrowseUrl: '../../admin_assets/plugins/responsive_filemanager/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl: '../../admin_assets/plugins/responsive_filemanager/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl: '../../admin_assets/plugins/responsive_filemanager/responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
            filebrowserUploadUrl: "../../admin_assets/plugins/responsive_filemanager/responsive_filemanager/filemanager/upload.php?type=Images",
        });
    }

    $(document).ready(function () {
        HT.uploadImage();
    });
})(jQuery);
