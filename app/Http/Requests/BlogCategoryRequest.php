<?php

namespace App\Http\Requests;

use  Illuminate\Http\Request ;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\UniqueUrlRule;
class BlogCategoryRequest extends FormRequest
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
        switch ($this->segment(3)){
            case 'add' :
                return[

                    'image'=>'max:40',
                    'title_seo'=>'max:71',
                    'description_seo'=>'max:171',
                    'url' => [ 'required' ,  new UniqueUrlRule ($id , 'BlogCategory')]  ,


                ];
                break;
            case 'edit' :
                return [
                    'image'=>'max:30',
                    'title_seo'=>'max:71',
                    'description_seo'=>'max:171',
                    'url' => [ 'required' ,  new UniqueUrlRule ($id , 'BlogCategory')]  ,
                ];
                break;
            case 'delete' :
                return [
                    'deleteId' => 'required',
                ];
                break;
        }
    }
    public function messages()
    {
        return [

            'image.max' => ' حجم عکس باید کمتر از ۳۰ کیلوبایت باشد',
            'title_seo.max' => ' تعداد کاراکتر عنوان سئو باید کمتر از ۷۰ باشد',
            'description_seo.max' => ' تعداد کاراکتر توضیحات سئو باید کمتر از ۱۷۰ باشد',
            'url' => 'آدرس وارد شده تکراری است'


        ];
    }

}
