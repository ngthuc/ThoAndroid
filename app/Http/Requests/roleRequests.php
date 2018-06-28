<?php
/**
 * Created by PhpStorm.
 * User: OS 8.1
 * Date: 29/04/2018
 * Time: 11:01 PM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class roleRequests extends FormRequest
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
            'name' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Chưa nhập tên!',
            'name.min' => 'Tên ít nhất 3 ký tự !'
        ];
    }

}