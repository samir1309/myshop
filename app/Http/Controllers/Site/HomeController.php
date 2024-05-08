<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductCategory;
use App\Models\Product;

class HomeController extends Controller
{
    public function getIndex()
    
    {
        $category = Category :: orderBy('id' , 'DESC')-> whereNull('parent_id' )->get();
        $category = Category ::  whereNull('parent_id' )->get();
        return view('site.index', compact('category'));
    }

    public function getDetails($url)
    {
        // $course = Product::find($url);
        $course = Product::where('url', $url)->first();
  
      
        $cat_pro = ProductCategory::whereIn('product_id',$course )->pluck('category_id');

        
        $categories = Category::whereIn('id',$cat_pro)->pluck('title')->first();
      
      return view('site.product.details', compact('course' , 'categories' ));
    }

    public function getCcategory(Category $category)
{
  $subCategories = $category->childs;
  


  return view('site.product.category', compact('subCategories'));
}

// public function getCategory($id) 
// {
// //   $category = Category::find($id);
// //   dd( $category);
// //   $categories = Category::whereIn('url',$url)->get();
// //   dd( $categories);

// $category->childs;
// dd( $categories);

//   $subCategories = $category->childs;

// dd( $subCategories);
//   return view('view.name', compact('subCategories'));
// }

    public function getCategory( $url  )
    {
       
        $category = Category::where('url', $url)->first();
    

    
        $courses = $category->products;

      return view('site.product.category', compact( 'category','courses'));


    }
    public function getCatcegory($id) 
    {
      $category = Category::find($id);
    
      $courses = $category->courses;
    
      return view('category', compact('category', 'courses'));
    }

    public function getlist($id)  
    {
      $category = Category::find($id);
    
      $productCategories = ProductCategory::where('category_id', $category->id)->get();
    
      $products = [];
    
      foreach($productCategories as $productCategory){
        $product = Product::find($productCategory->product_id);
        $products[] = $product;

      }
    
      return view('site.product.list', compact('category', 'products'));
    }
}
