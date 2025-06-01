<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'phone' => 'required',
            'province_id' => 'gt:0',
            'district_id' => 'gt:0',
            'ward_id' => 'gt:0',
            'payment_method' => 'gt:0',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Bạn chưa có Họ tên',
            'name.string' => 'Họ tên bạn nhập phải là dạng chuỗi',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'province_id.gt' => 'Bạn chưa chọn Tỉnh/Thành phố',
            'ward_id.gt' => 'Bạn chưa chọn Xã/ Phường',
            'district_id.gt' => 'Bạn chưa chọn Quận/ Huyện',
            'payment_method.gt' => 'Bạn chưa chọn hình thức thanh toán',
        ];
    }
}
