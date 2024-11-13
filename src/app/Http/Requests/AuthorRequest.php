<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => ['max:1', 'regex:/^[男性|女性|その他]+$/u'],
            'email' => 'email',
            'tel' => 'integer|min:3|max:5',
            'address' => 'required',
            'building' => 'nullable',
            'item' => 'required',
            'detail' => 'required|max:120'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '性を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.regex' => '性別を入力してください',
            'email.email' => 'メールアドレスを入力してください',
            'tel.integer' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'item.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
        ];
    }
}
