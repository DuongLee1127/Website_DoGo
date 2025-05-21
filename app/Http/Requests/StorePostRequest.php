<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'category' => 'gt:0',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Bạn chưa nhập tiêu đề bài viết',
            'title.string' => 'Tiêu đề bạn nhập phải là dạng chuỗi',
            'description.required' => 'Bạn chưa nhập mô tả ngắn',
            'content.required' => 'Bạn chưa nội dung',
            'category.gt' => 'Bạn chưa chọn danh mục cha',
        ];
    }
}
