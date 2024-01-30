<?php

namespace App\Http\Requests;

  use  Illuminate\Http\Request ;

use Illuminate\Foundation\Http\FormRequest;

use App\Rules\UniqueUrlRule;

class BlogRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $id = $request->route('id');
   

        return [

                    'image'=>'max:40  ' ,
                    'title_seo'=>'max:71 ',
                    'description_seo'=>'max:171  ',
                    'url' => [ new UniqueUrlRule ($id)] 
        ];

    dd ("bfdbfdb");

        
    }
    public function messages()
    {
      return [
        'url' => 'The URL has already been taken.',
        'image.max' => ' حجم عکس باید کمتر از ۳۰ کیلوبایت باشد',
        'title_seo.max' => ' تعداد کاراکتر عنوان سئو باید کمتر از ۷۰ باشد',
        'description_seo.max' => ' تعداد کاراکتر توضیحات سئو باید کمتر از ۱۷۰ باشد',
      ];
    }
    

}


