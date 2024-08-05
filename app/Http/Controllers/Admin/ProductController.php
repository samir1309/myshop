<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Price;
use NumberFormatter;
use App\Models\Category;
use App\Http\Requests\ProductVideoRequest;
use App\Models\ProductVideo;
use App\Models\ProductCategory;
use App\Library\Helper;
use app\Library\MakeTree;
use App\Library\UploadsImg;

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

    public function getVideo($id)
    {
        $product = Product::find($id);
        
        if ($product) {
            $data = ProductVideo::whereProductId($product->id)->orderBy('id','DESC')->paginate(100);
            $videoSort = ProductVideo::whereProductId($product->id)->orderBy('id','DESC')->get();
            
            return view('admin.products.video.index')
                ->with('product', $product)
                ->with('data', $data)
                ->with('videoSort', $videoSort);
        } else {
            // در صورتی که محصول یافت نشد، به صفحه قبل بازگردید و یک پیام خطا نمایش دهید
            return redirect()->back()->with('error', 'محصول یافت نشد.');
        }
    }
    public function getAddVideo($product_id)
    {
        $product = Product::find($product_id);
        return view('admin.products.video.add')
            ->with('product',$product)
            ->with('product_id', $product_id);



    }
    public function postSortVideo(Request $request , $id)
    {
        if ($request->get('update') == "update") {
            $count = 1;
            if ($request->get('update') == 'update') {
                foreach ($request->get('arrayorder') as $idval) {
                    $category = ProductVideo::where('product_id',$id)->find($idval);
                    $category->listorder = $count;
                    $category->save();
                    $count++;
                }
                echo 'با موفقیت ذخیره شد.';
            }
        }
    }

    public function postAddVideo($id,ProductVideoRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $path = "assets/uploads/content/pro/";
            $section = 'video' ; 
     
            $uploader = new UploadsImg();
            $fileName = $uploader->uploadPic( $request , $request->file('image'), $path  ,  $resize  ,  $section  );
                $input['image'] = $fileName;
        }

        $video = ProductVideo::create($input);
        
   
        return redirect('admin/products/video/'.$id)->with('success', '   با موفقیت اضافه شد');
    }
        public function getEditVideo($product_id)
    {
        $data = ProductVideo::find($product_id);
        return view('admin.products.video.edit')
            ->with('data' , $data)
            ->with('product_id', $product_id);
    }
    public function postEditVideo($id , Request $request)
    {
        $input = $request->all();
        $video = ProductVideo::find($id);
        $input['product_id'] = $video->product_id;
        $video->update($input);
        return \redirect('admin/products/video/'.$video->product_id)->with('success','  با موفقیت ویرایش شد.');
    }
    
    public function getDeleteVideo($id,Request $request)
    {
        $video = ProductVideo::find($id);
        ProductVideo::destroy($id);
        return Redirect::back()
            ->with('success', 'ویدیو مورد نظر با موفقیت حذف شد.');

    }
    
}
