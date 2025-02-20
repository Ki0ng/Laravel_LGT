<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // true: cho phép request (hien thi loi), false: không cho phép request (k hien thi loi)
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // xet cac rang buoc
            'name' => 'required|max:255|string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string'
        ];
    }

    public function messages()
    {
        return [
            // xet cac loi
            'name.string' => 'Vui long dien ten cho noi dung',
            'age.numberic' => 'Vui long nhap tuoi cho noi dung',
            'date.string' => 'Vui long nhap ngay thang cho noi dung',
            'phone.numberic' => 'Vui long nhap so dien thoai cho noi dung',
            'web.string' => 'Vui long nhap kiem tra lai ky tu cho noi dung',
            'address.string' => 'Vui long nhap lai dia chi'
        ];       
    }
}