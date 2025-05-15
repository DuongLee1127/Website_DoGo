<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich Filemanager</title>
    <link rel="stylesheet" href="{{ asset('/RichFilemanager/src/css/filemanager.css') }}">
</head>
<body>
     <label for="imageInput">Chọn hình ảnh:</label>
    <input type="text" id="imageInput" name="image" readonly>

    <!-- Nút để mở file manager -->
    <button id="selectImageButton">Chọn ảnh</button>

    <script src="{{ asset('/RichFilemanager/js/filemanager.js') }}"></script>
    <script>
        // Cấu hình Rich Filemanager
        const fileManager = new RichFilemanager({
            url: '{{ url('filemanager') }}',  // URL của filemanager
            language: 'vi',  // Ngôn ngữ
            onSelect: function(file) {
                // Lấy đường dẫn của hình ảnh và điền vào ô input
                document.getElementById('imageInput').value = file.url;
            }
        });

        // Khi nhấn nút, mở file manager để chọn hình ảnh
        document.getElementById('selectImageButton').addEventListener('click', function() {
            console.log('ok')
            // fileManager.open();
        });
    </script>
</body>
</html>
