<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'email' => 'required|string|email|unique:users,email,'.$this->id,
            'name' => 'required|string',

        ];
    }

    public function messages(){
        return [
            'email.required' => 'Bạn chưa nhập email',
            'email.unique' => 'Email đã tồn tại',
            'email.string' => 'Email phải là dạng ký tự',
            'email.max' => 'Email phải nhỏ hơn 191 ký tự',
            'name.required' => 'Họ tên không được để trống',
            'name.string' => 'Họ tên phải là dạng ký tự',
            'email.email' => 'Hãy nhập đúng định dạng Email. Ví dụ abc@gmail.com',

        ];
    }
}
