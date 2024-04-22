<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|min:3' ,
            'mobile' => 'required|string|max:11|unique:users' ,
            'password' => 'required|min:6',
            're-password'=>'required|same:password',
        ];
    }
    public function messages()
    {
       return [
            'name.required' => '   نام اجباری است',
            'mobile.unique' => '   شماره تکراری است',
            'password.required' => '  رمز ورود اجباری است',
            're-password.required' => '  تکرار رمز ورود اجباری است',
            're-password.same' => '  تکرار رمز ورود  و رمز ورود مشابه نیستند',
        ];
    }
}

