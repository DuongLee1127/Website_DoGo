<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'slug' => 'required|string',
            'description' => 'required|string',
            'image_path' => 'required|url',
            'category' => 'gt:0',
            'price' => 'required|numeric|min:0',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Bạn chưa nhập tên sản phẩm',
            'name.string' => 'Tên sản phẩm phải là dạng chuỗi',
            'slug.required' => 'Bạn chưa nhập mô tả ngắn',
            'description.required' => 'Bạn chưa nhập mô tả chi tiết',
            'image_path.required' => 'Bạn chưa chọn ảnh sản phẩm',
            'image_path.url' => 'Ảnh sản phẩm phải là môt đường dẫn',
            'price.required' => 'Bạn chưa nhập giá sản phẩm',
            'price.numeric' => 'Giá sản phẩm phải là dạng số',
            'price.min' => 'Giá sản phẩm phải lớn hơn 0',
            'category.gt' => 'Bạn chưa chọn danh mục cha',
        ];
    }
}
