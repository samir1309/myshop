<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Prices;
use App\Models\Categories;
use App\Library\Helper;
use app\Library\MakeTree;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Redirect;




class ProductController extends Controller
{
    public function getProduct(Request $request)
    {
        $query= Products::orderBy('id','DESC');
        $products = $query->paginate(100);
        $categorySort = Products::orderby('sort', 'ASC')->get();
        $cat = Categories::get();

        return View('admin.products.index')
            ->with('products', $products)
            ->with('categorySort', $categorySort)
            ->with('category', $cat);
    }

    
    public function getAddProduct()
    {
        $category = Categories::select(['id','title'])->get();


        if (!empty($category)) {
            MakeTree::getData($category);
            $category = MakeTree::GenerateArray(array('get'));
        }
        return View('admin.products.add')

            ->with('category', $category)
            ->with('parent_id', $category);
    }

    public function postAddProduct(ProductRequest $request)
    {

        $input = $request->all();
     
        $input['status'] = $request->has('status');
          $check = Products::where('title_seo', $input['title_seo'])->first();
        if ($check){
            return Redirect::back()->with('error' , 'عنوان سئو تکراری است');
        }
        $check2 = Products::where('description_seo', $input['description_seo'])->first();
        if ($check2){
            return Redirect::back()->with('error' , 'توضیحات سئو تکراری است');
        }

        if(@$request['price'] !== null){

                $input['price']=@$request['price'];
                $input['old_price']=@$request['old_price'];


        }else{
            $input['price']=@$request['old_price'];
            $input['old_price']=0;
        }
        
        $product = Products::create($input);
        // $product->update($input);

        // if ($request['old_price'] != null || $request['price'] != null) {
        //     $price = Prices::create([
        //         'old_price' =>@$request['old_price'],
        //         'price' => @$request['price'],
        //     ]);
        // }

        return Redirect::action('Admin\ProductController@getProduct');
    }

}
