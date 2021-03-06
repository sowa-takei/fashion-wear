<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'name_kana' => ['regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'last_name_kana' => ['regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:7', 'min:7','regex:/^[0-9]+$/'],
            'telephone_number' => ['required', 'string', 'max:13','min:12','regex:/^[0-9-]+$/'],
        ];
    }
}
