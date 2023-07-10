<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'name' => 'required|min:3',
            'prefecture' => 'required|min:1',
            'gender' => 'required|min:1',
            'employmentstatus' => 'required|min:1',
            'company' => 'required|min:1',
            'jyob' => 'required|min:1',
            'stay' => 'required|min:1',
            'affiliation' => 'required|min:1',
            'postion' => 'required|min:1',
            'annual' => 'required|min:1',
            'lastyear' => 'required|min:1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '氏名は必須です',
            'name.min' => ':min 文字以上入力してください',
            'prefecture.required' => '出身地は必須です',
            'gender.required' => '性別は必須です',
            'employmentstatus.required' => '雇用形態は必須です',
            'stay.required' => '現住所は必須です',
            'jyob.required' => '所属は必須です',
            'affiliation' => 'チーム名は必須です',
            'postion' => 'ポジションは必須です',
            'annual' => '現年収は必須です',
            'lastyear' => '前年収は必須です',
        ];
    }
}