<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gemini Chat</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

    <div class="container">
        <h2>Chat với Gemini</h2>

        <div class="mb-3">
            <label for="message" class="form-label">Nhập nội dung:</label>
            <input type="text" class="form-control" id="message" placeholder="Nhập câu hỏi...">
        </div>

        <button class="btn btn-primary" id="sendBtn">Gửi đến Gemini</button>

        <div class="mt-4">
            <h5>Phản hồi:</h5>
            <div id="response" class="border p-3 bg-light" style="min-height: 100px;"></div>
        </div>
    </div>

    <script>
        document.getElementById('sendBtn').addEventListener('click', function () {
            const message = document.getElementById('message').value;
            const responseDiv = document.getElementById('response');

            fetch('/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ message })
            })
            .then(res => res.json())
            .then(data => {
                const text = data?.candidates?.[0]?.content?.parts?.[0]?.text || 'Không có phản hồi.';
                responseDiv.innerText = text;
            })
            .catch(err => {
                responseDiv.innerText = 'Đã xảy ra lỗi khi gọi API.';
                console.error(err);
            });
        });
    </script>
</body>
</html>
