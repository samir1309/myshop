<?php

namespace App\Rules;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use App\Models\Product;

class UniqueUrlRule implements Rule
{

    protected $id;
    protected $modal;


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
      
        if ($this->modal == 'Blog') {            
            $count = Blog::where('url', $value)
            ->where('id', '!=', $this->id)
            ->count();
            return $count === 0;
        }

     
        if ($this->modal == 'Category') {            
            $count = Category::where('url', $value)
            ->where('id', '!=', $this->id)
            ->count();
            return $count === 0;
        }

        if ($this->modal == 'BlogCategory') {            
            $count = BlogCategory::where('url', $value)
            ->where('id', '!=', $this->id)
            ->count();
            return $count === 0;
        }

        if ($this->modal == 'Product') {            
            $count = Product::where('url', $value)
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




