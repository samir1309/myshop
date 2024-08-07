<?php


use App\Library\SliderBanner;
// use App\Models\Brand;
use App\Models\Category;
use App\Models\Content;
use App\Models\Basket;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Social;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

$category_footer=[];
$brands_footer=[];
$setting_header=[];
$social_header=[];

$head_sli=[];
$seg=[];
$seg = \request()->segments();

 $setting = Setting::first();
// $brands_footer = Cache::remember('index.brands_footer', 20, function() {
// return Brand::orderby('id', 'DESC')->whereFooter('1')->take(10)->select(['id','title'])->get();
// });




$head_sli = Content::Slider()->where('status','1')->get();


$category_footer = Cache::remember('index.category_footer', 20, function() {
return Category::orderBy('sort','ASC')->whereNull('parent_id')->select(['id','title' ,'url'])->with('childs')->get();
});

$category_footer = Cache::remember('index.category_footer', 20, function() {
    return Category::orderBy('sort','ASC')->whereNull('parent_id')->select(['id','title' , 'url'])->with('childs')->get();
    });
$social=Social::get();





View::share([
    'category_footer' => $category_footer,
    'main_mobile' => SliderBanner::Mobile(),
    'brands_footer' => $brands_footer,
    'setting' => $setting,
    'social' => $social,
    'head_sli' => $head_sli,
    'seg' => $seg,
]);
