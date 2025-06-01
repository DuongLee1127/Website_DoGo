<!-- Icon Chat -->
    <div class="chat-icon bg-primary text-white" onclick="toggleChatBox()">
        <i class="bi bi-chat-dots-fill"></i>
    </div>

    <!-- Khung Chat -->
    <div class="chat-box card">
        <div class="chat-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Đệ tử ruột của chủ shop</h5>
            <button type="button" class="btn-close btn-close-white" onclick="toggleChatBox()"></button>
        </div>
        <div class="chat-body" id="chatBody">
            <div class="message staff">Chào bạn! Hôm nay tôi có thể giúp gì cho bạn?</div>
        </div>
        <div class="chat-footer">
            <div class="input-group">
                <input type="text" class="form-control" id="message" placeholder="Nhập câu hỏi...">
                <button class="btn btn-primary" id="sendBtn" onclick="sendMessage()">Gửi</button>
            </div>
        </div>
    </div>

