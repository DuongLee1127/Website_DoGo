<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Thanh Toán Đơn Hàng</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('client.payment') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Họ và Tên</label>
                        <input type="text" name="name" class="form-control" id="fullName" value="{{ ($user->name)??'' }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Số Điện Thoại</label>
                        <input type="tel" name="phone" class="form-control" id="phoneNumber" value="{{ ($user->phone)??'' }}" required placeholder="0123 456 789" >
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa Chỉ Giao Hàng</label>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                        <select name="province_id" id="select-province"
                                            class="form-control js-select2 province" data-target="districts">
                                            <option value="0">[Tỉnh]</option>
                                            @if(isset($provinces) && is_object($provinces))
                                            @foreach ($provinces as $province)
                                            <option @if(old('province_id')==$province->code) selected @endif value="{{ $province->code }}">{{ $province->name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <select name="district_id" id="select-district"
                                            class="form-control js-select2 districts" data-target="wards">
                                            <option value="0">[Quận/Huyện]</option>
                                            @if(isset($districts) && is_object($districts))
                                            @foreach ($districts as $district)
                                            <option value="{{ $district->code }}">{{ $district->name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <select name="ward_id" id="select-ward"
                                            class="form-control js-select2 wards">
                                            <option value="0">[Xã/Phường]</option>
                                            @if(isset($wards) && is_object($wards))
                                            @foreach ($wards as $ward)
                                            <option value="{{ $ward->code }}">{{ $ward->name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                        </div>
                        @php
                            $paymentMethod = [
                                'Chọn phương thức thanh toán',
                                'Thanh toán khi nhận hàng',
                                'Thanh toán qua Vnpay',
                            ]
                        @endphp
                        <div class="row">
                            <label for="payment-method" class="form-label">Phương thức thanh toán</label>
                            <div class="col-12 col-md-12">
                                        <select name="payment_method" id="payment-method"
                                            class="form-control js-select2">
                                            @foreach ($paymentMethod as $key => $method)
                                            <option @if(old('payment_method')==$key) selected @endif value="{{ $key }}">{{ $method }}</option>
                                            @endforeach
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="notes" class="form-label">Ghi Chú (Tùy Chọn)</label>
                        <textarea class="form-control" id="notes" rows="4"
                            placeholder="Ghi chú về đơn hàng (ví dụ: địa chỉ chi tiết)"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="total_vnpay" class="form-label">Tổng tiền: {{ number_format($total) }}</label>
                        <input type="hidden" name="total_vnpay" value="{{ $total }}">
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
