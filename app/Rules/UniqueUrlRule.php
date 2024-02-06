<?php

namespace App\Rules;
use App\Models\Categories;
use App\Models\Blog;
use Illuminate\Contracts\Validation\Rule;

class UniqueUrlRule implements Rule
{

    protected $id;


    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($id , $modal)
    {

        $this->id = $id;
        $this->modal = $modal;

    
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
        if(  $this->modal = 'Categories'){
            $count = Categories::where('url', $value)
            ->where('id', '!=', $this->id)
            ->count();
            return $count === 0;

        }

      
       
        if(  $this->modal = 'Blog'){
            $count = Blog::where('url', $value)
            ->where('id', '!=', $this->id)
            ->count();
            return $count === 0;
        }

 
    
    
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
      return 'آدرس تکراری است';
    }
}




