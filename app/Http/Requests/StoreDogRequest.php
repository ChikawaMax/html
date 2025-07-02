<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:10',
            'type' => 'required|string|max:10',
            'age' => 'required|integer|min:0|max:30'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => '名前は必須です。',
            'type.required' => '犬種は必須です。',
            'age.required' => '年齢は必須です。',
            'age.integer' => '年齢は数値で入力してください。',
            'name.max' => '名前は10文字以内で入力してください。',
            'type.max' => '犬種は10文字以内で入力してください。',
            'age.min' => '年齢は0歳以上で入力してください。',
            'age.max' => '年齢は30歳以下で入力してください。'
        ];
    }
}
