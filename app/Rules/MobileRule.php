<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Rules\MobileRule;
use App\Library\Helper;

class MobileRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value):bool
    {
        $pattern = '/^(\+98|0|0098)?9\d{9}$/';
        $parsed_mobile = Helper::persian2LatinDigit($value);
      
        if (preg_match($pattern, $parsed_mobile)) {
            return true;
        } else {
            return false;
        }
    }


    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() : string
    {
        return 'شماره موبایل صحیح نمیباشد.';
    }

}