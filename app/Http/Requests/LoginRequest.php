<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\MobileRule;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mobile' => ['required', 'min:11', 'max:11', new MobileRule()],
            'password' => 'required|min:6',
           
        ];
    }
    public function messages()
    {
       return [
            'mobile.unique' => '   شماره تکراری است',
            'password.required' => '  رمز ورود اجباری است',
        ];
    }
}

