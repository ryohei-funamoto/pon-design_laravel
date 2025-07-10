<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'type' => 'required',
            'name' => 'required|max:20',
            'company' => 'required|max:30',
            'email' => 'required|email|max:255|confirmed',
            'tel' => 'nullable|regex:/^(0{1}\d{9,10})$/',
            'comment' => 'nullable|max:500',
            'job' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'お問い合わせ種別の選択は必須です',
            'name.required' => 'お名前の入力は必須です',
            'name.max' => 'お名前は :max 文字以内で入力してください',
            'company.required' => '会社名の入力は必須です',
            'company.max' => '会社名は :max 文字以内で入力してください',
            'email.required' => 'メールアドレスの入力は必須です',
            'email.email' => 'メールアドレスの形式が不適切です',
            'email.max' => 'メールアドレスは :max 文字以内で入力してください',
            'email.confirmed' => 'メールアドレスと確認用メールアドレスが一致しません',
            'tel.regex' => '電話番号はハイフン無しで入力してください',
            'comment.max' => 'お問い合わせ内容は :max 文字以内でご入力ください',
            'job.required' => '「PON DESIGNをどちらでお知りになりましたか？」を選択してください',
        ];
    }
}
