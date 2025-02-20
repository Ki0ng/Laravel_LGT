<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Myrequest extends FormRequest
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
        ];
    }

    public function messages()
    {
 
    }
}
