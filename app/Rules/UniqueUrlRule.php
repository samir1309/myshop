<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UniqueUrlRule implements Rule
{

    protected $id;


    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;

    
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $count = Blog::where('url', $value)
        ->where('id', '!=', $this->id)
        ->count();

         return $count === 0;
    
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return  ' url  تکراری است' ;
    }
}
