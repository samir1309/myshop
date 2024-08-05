<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\ProductVideo;
use App\Models\ProductCategory;
use App\Models\Product;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function getIndex()
    
    {
        $category = Category :: orderBy('id' , 'DESC')-> whereNull('parent_id' )->get();
        $category = Category ::  whereNull('parent_id' )->get();
        return view('site.index', compact('category'));
    }
    public function getAbout()
    {
      return view('site.about');
    }
    public function getCatBlog($id)
    
    {
        $category = BlogCategory::with('blogs')->where('id', $id)->firstOrFail();  
        $posts = $category->blogs()->get();  
        return view('site.blog.list', compact('category', 'posts')); 


    }
 
    public function getListBlog()  
    {  
          
          $posts = Blog::with('category')->get();  
   

          return view('site.blog.listcat', compact( 'posts' ));  
     
       
  }  
  public function getlist($url)  
  { 
       $post = Category::where('url', $url)->firstOrFail();  

       dd($post);
    $category = Category::find($id);
  
    $productCategories = ProductCategory::where('category_id', $category->id)->get();
  
    $products = [];
  
    foreach($productCategories as $productCategory){
      $product = Product::find($productCategory->product_id);
      $products[] = $product;

    }
  
    return view('site.product.list', compact('category', 'products'));
  }

  public function getDetailsBlog($url)  
  {  

     $post = Blog::where('url', $url)->firstOrFail();  
     $category = $post->category; 
     $post->update([
      'view'=> $post->view + 1
  ]); 
     return view('site.blog.details', compact('post', 'category'));  
} 
 
    public function getDetails($url)
    {
        $course = Product::where('url', $url)->first();
        $cat_pro = ProductCategory::whereIn('product_id',$course )->pluck('category_id');
$totalTime = ProductVideo::where('product_id', $course->id)
                      ->sum('time');  
                      $interval = \Carbon\CarbonInterval::minutes($totalTime);

                      $time = \Carbon\Carbon::parse($interval)->format('H:i');
        $videos = ProductVideo::where('product_id',$course->id)->orderBy('sort','ASC')->get();
        $totalvideo = ProductVideo::where('product_id',$course->id)->count();
        $categories = Category::whereIn('id',$cat_pro)->pluck('title')->first();
      
        $formatprices = $course->formatPrice($course->price);

        
      return view('site.product.details', compact('course' , 'categories', 'videos', 'totalvideo' , 'time' , 'formatprices' ));
      
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

  
}
