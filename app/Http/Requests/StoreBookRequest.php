<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:100',
            'author' => 'required|min:3',
            'description' => 'nullable|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'タイトルは必須です。',
            'title.max' => 'タイトルは100文字以内で入力してください。',
            'author.required' => '著者名は必須です。',
            'author.min' => '著者名は3文字以上で入力してください。',
            'description.max' => '説明は500文字以内で入力してください。',
        ];
    }
}
