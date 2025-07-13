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
            'email_confirmation' => 'required',
            'tel' => 'nullable|regex:/^(0{1}\d{9,10})$/',
            'comment' => 'nullable|max:500',
            'job' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'type' => 'お問い合わせ種別',
            'name' => 'お名前',
            'company' => '会社名',
            'email' => 'メールアドレス',
            'email_confirmation' => 'メールアドレス（確認用）',
            'tel' => '電話番号',
            'comment' => 'お問い合わせ内容',
            'job' => 'PON DESIGNをどちらでお知りになりましたか？',
        ];
    }

    public function messages()
    {
        return [
            'type.required' => ':attribute の選択は必須です',
            'name.required' => ':attribute の入力は必須です',
            'name.max' => ':attribute は :max 文字以内で入力してください',
            'company.required' => ':attribute の入力は必須です',
            'company.max' => ':attribute は :max 文字以内で入力してください',
            'email.required' => ':attribute の入力は必須です',
            'email.email' => ':attribute の形式が不適切です',
            'email.max' => ':attribute は :max 文字以内で入力してください',
            'email.confirmed' => ':attribute とメールアドレス（確認用）が一致しません',
            'email_confirmation.required' => ':attribute の入力は必須です',
            'tel.regex' => ':attribute はハイフン無しで入力してください',
            'comment.max' => ':attribute は :max 文字以内でご入力ください',
            'job.required' => '「 :attribute 」を選択してください',
        ];
    }
}
