<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('users_assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('users_assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('users_assets/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('users_assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<!-- Template Javascript -->
<script src="{{ asset('users_assets/js/main.js') }}"></script>
<script src="https://kit.fontawesome.com/b670a00879.js" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@if (isset($config['js']))
    @foreach ($config['js'] as $key => $val)
        {!! '<script src="' . asset($val) . '"></script>' !!}
    @endforeach

@endif
<script>
    function sendMessage() {
        const messageInput = document.getElementById('message');
        const chatBody = document.getElementById('chatBody');
        const messageText = messageInput.value.trim();

        if (messageText !== '') {
            // Thêm tin nhắn của khách hàng
            const customerMessage = document.createElement('div');
            customerMessage.className = 'message customer';
            customerMessage.textContent = messageText;
            chatBody.appendChild(customerMessage);

            // Xóa input và cuộn xuống cuối
            messageInput.value = '';
            chatBody.scrollTop = chatBody.scrollHeight;
        }
    }
    document.getElementById('message').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            handleAction();
            sendMessage();
        }
    });

    function handleAction() {
        const message = document.getElementById('message').value;
        console.log('message'+message)
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


                setTimeout(() => {
                    const staffMessage = document.createElement('div');
                    staffMessage.className = 'message staff';
                    const formattedText = text.replace(/\n/g, "<br>");
                    staffMessage.innerHTML = formattedText;
                    chatBody.appendChild(staffMessage);
                    chatBody.scrollTop = chatBody.scrollHeight; // Cuộn xuống cuối
                }, 200);
            })
            .catch(err => {
                responseDiv.innerText = 'Đã xảy ra lỗi khi gọi API.';
                console.error(err);
            });
    }

    document.getElementById('sendBtn').addEventListener('click', handleAction);
</script>
<script>
    function toggleChatBox() {
        const chatBox = document.querySelector('.chat-box');
        chatBox.style.display = chatBox.style.display === 'block' ? 'none' : 'block';
    }


</script>

<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':

                toastr.options.timeOut = 10000;
                toastr.info("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();
                break;
            case 'success':

                toastr.options.timeOut = 10000;
                toastr.success("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
            case 'warning':

                toastr.options.timeOut = 10000;
                toastr.warning("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
            case 'error':

                toastr.options.timeOut = 10000;
                toastr.error("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
        }
    @endif
</script>
