<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'email' => 'required|string|email|unique:users|max:191',
            'fullname' => 'required|string',
            'password' => 'required|string|min:6',
            'repassword' => 'required|string|min:6|same:password',
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Bạn chưa nhập email',
            'email.unique' => 'Email đã tồn tại',
            'email.string' => 'Email phải là dạng ký tự',
            'email.max' => 'Email phải nhỏ hơn 191 ký tự',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.string' => 'Mật khẩu phải là dạng ký tự',
            'password.min' => 'Mật khẩu phải có tối thiểu 6 ký tự',
            'repassword.required' => 'Bạn chưa nhập lại mật khẩu',
            'repassword.string' => 'Mật khẩu phải là dạng ký tự',
            'repassword.min' => 'Mật khẩu phải có tối thiểu 6 ký tự',
            'repassword.same' => 'Nhập lại mật khẩu chưa khớp',
            'fullname.required' => 'Họ tên không được để trống',
            'fullname.string' => 'Họ tên phải là dạng ký tự',
            'email.email' => 'Hãy nhập đúng định dạng Email. Ví dụ abc@gmail.com'
        ];
    }
}
