<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Price;
use NumberFormatter;
use App\Models\Category;
use App\Models\ProductCategory;
use App\Library\Helper;
use app\Library\MakeTree;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function getProduct(Request $request)
    {
        $query= Product::orderBy('id','DESC');
        $products = $query->paginate(100);
        $category = Category::get();
        return View('admin.products.index')
            ->with('products', $products)
            ->with('category', $category);
    }

    
    public function getAddProduct()
    {
        $productCategories = Category::select(['id','title'])->get();
        if (!($productCategories)) {
            MakeTree::getData($category);
            $category = MakeTree::GenerateArray(array('get'));
        }



        return View('admin.products.add')
            ->with('category', $productCategories)
            ->with('parent_id', $productCategories);
    }

    public function postAddProduct(ProductRequest $request)
    {

        $input = $request->all();
        $input['status'] = $request->has('status');
        //   $check = Product::where('title_seo', $input['title_seo'])->first();
        // if ($check){
        //     return Redirect::back()->with('error' , 'عنوان سئو تکراری است');
        // }
        // $check2 = Product::where('description_seo', $input['description_seo'])->first();
        // if ($check2){
        //     return Redirect::back()->with('error' , 'توضیحات سئو تکراری است');
        // }
        if(@$request['price'] !== null){

                $input['price']=@$request['price'];
                $input['old_price']=@$request['old_price'];


        }else{
            $input['price']=@$request['old_price'];
            $input['old_price']=0;
        }
      


        $product = Product::create($input);
    
        if ($request->has('category_id')) {
            $product->assignCategory($request['category_id']);
        }
        $product->update($input);
        return redirect()->route('admin.products.index');


    }
    public function getEditProduct($id)
    {

        $data = Product::find($id);


        $category = Category:: where('id' , '<>' , $data->id )->orderby('id', 'DESC')->get()->toArray();
        if (!empty($category)) {
            MakeTree::getData($category);
            $category = MakeTree::GenerateArray(array('get'));
        }
        $productCategories = ProductCategory::where('product_id', $id)->get();

        return View('admin.products.edit')

           ->with('data', $data)
           
            ->with('parent_id', $category)
            ->with('category', $productCategories);

       
    }
    public function postEditdProduct(ProductRequest $request)
    {

        $input = $request->all();
        $input['status'] = $request->has('status');
        //   $check = Product::where('title_seo', $input['title_seo'])->first();
        // if ($check){
        //     return Redirect::back()->with('error' , 'عنوان سئو تکراری است');
        // }
        // $check2 = Product::where('description_seo', $input['description_seo'])->first();
        // if ($check2){
        //     return Redirect::back()->with('error' , 'توضیحات سئو تکراری است');
        // }
        if(@$request['price'] !== null){

                $input['price']=@$request['price'];
                $input['old_price']=@$request['old_price'];


        }else{
            $input['price']=@$request['old_price'];
            $input['old_price']=0;
        }
        $fmt = new NumberFormatter('fa_IR', NumberFormatter::CURRENCY);

        $price = $fmt->parseCurrency(Helper::persian2LatinDigit(@$request['price']), 'IRR');

        $price = (int) $price;
        
        $product = Product::create($input);
    
        if ($request->has('category_id')) {
            $product->assignCategory($request['category_id']);
        }
        $product->update($input);
        return redirect()->route('admin.products.index');

    }

    public function postEditProduct(ProductRequest $request, $id)
    {
        // یافتن محصول بر اساس شناسه
        $product = Product::findOrFail($id);
     

        // بروزرسانی اطلاعات محصول
        $product->title = $request->title;
        $product->url = $request->url;
        $product->old_price = $request->old_price;
        $product->price = $request->price;
        $product->title_seo = $request->title_seo;
        $product->description_seo = $request->description_seo;
        $product->status = $request->status;
        $product->how_to_use = $request->how_to_use;
        $product->description = $request->description;
        $product->save();

        // بروزرسانی دسته‌های محصول
        $categoryIds = $request->category_id;
        // // حذف دسته‌های قبلی محصول
        if ($request->has('category_id')) {
            $product->assignCategory($request['category_id']);
        }
      

        return redirect()->route('admin.products.index');
    }
    }
    


