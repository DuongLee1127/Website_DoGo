<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Thanh Toán Đơn Hàng</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="get" action="{{ route('client.vnpay.payment') }}">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Họ và Tên</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Nguyen Van A" >
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Số Điện Thoại</label>
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="0123 456 789" >
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa Chỉ Giao Hàng</label>
                        <input type="text" class="form-control" id="address" placeholder="123 Đường Láng, Hà Nội"
                            >
                    </div>
                    <div class="mb-3">
                        <label for="total_vnpay" class="form-label">tiền</label>
                        <input type="text" class="form-control" name="total_vnpay" id="total_vnpay" placeholder="123 Đường Láng, Hà Nội"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Số Lượng</label>
                        <input type="number" class="form-control" id="quantity" min="1" placeholder="1">
                    </div>
                    <div class="mb-3">
                        <label for="notes" class="form-label">Ghi Chú (Tùy Chọn)</label>
                        <textarea class="form-control" id="notes" rows="4"
                            placeholder="Ghi chú về đơn hàng (ví dụ: giao hàng buổi sáng)"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Xác Nhận Đặt Hàng</button>
                        <button type="reset" class="btn btn-secondary">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
