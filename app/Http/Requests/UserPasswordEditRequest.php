<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPasswordEditRequest extends FormRequest
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
            'current_password' => [
                function($attribute, $value, $fail) {
                    $user = app('current_user');
                    if(!password_verify($value,$user->password)){
                        return $fail('現在のパスワードを正しく入力してください。');
                    }
                },
            ],
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ];
    }


    public function attributes()
    {
        return [
            'current_password' => '現在のパスワード',
            'password' => '新しいパスワード',
            'password_confirmation' => '確認のパスワード'
        ];
    }

    public function messages()
    {
        return [
            'password.confirmed' => '新しいパスワードと確認のパスワードが一致していません。',
            'password_confirmation.required' => '新しいパスワードと確認のパスワードが一致していません。'
        ];
    }
}
