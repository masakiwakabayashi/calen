<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'イベント名',
            'content' => '詳細'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルは必ず入力してください',
            'content.required' => '詳細は必ず入力してください'
        ];
    }
}
