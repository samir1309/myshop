<?php

namespace App\Http\Controllers\Admin;
use app\Library\MakeTree;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\models\Categories;
use Illuminate\Support\Facades\Redirect;



class CategoryController extends Controller
{
    
    public function getCategory()
    {
        $category = Categories::orderby('id','DESC')->get()->toArray();

        if (!empty($category)) {
            MakeTree::getData($category);
            $category = MakeTree::GenerateArray(array('paginate' => 100));
        }

            $categorySort = Categories::orderby('sort', 'ASC')->whereNull('parent_id')->get();
        return View('admin.category.index')
            ->with('categorySort', $categorySort)
            ->with('category', $category);
    }
    
    public function getAddCategory()
    {
        $categories = Categories::all()->toArray();
    //    if (!empty($category)) {
    //        MakeTree::getData($category);
    //        $parent_id = array(null => 'بدون والد') + MakeTree::GenerateSelect();
    //    } else {
    //        $parent_id = array(null => 'بدون والد');
    //    }

        if (!empty($categories)) {
            MakeTree::getData($categories);
            $categories = MakeTree::GenerateArray(array('get'));
        }

        return View('admin.category.add')
            ->with('categories', $categories);

    }


    public function postAddCategory(CategoryRequest $request)
    {

        $input = $request->all();
       
//        $input['url']=str_replace(' ', '-',$input['url']);
        $input['status'] = $request->has('status');
           
//        if ($request->hasFile('cover')) {
//            $pathMain = "assets/uploads/content/cat";
//            $extensionf = $request->file('cover')->getClientOriginalName();
//            $fileName = mt_rand(100, 999)."$extensionf";
//            $request->file('cover')->move($pathMain, $fileName);
//            $input['cover'] = $fileName;
//        }
//                if ($request->hasFile('cover')) {
//            $path = "assets/uploads/content/cat/";
//            $uploader = new UploadImgCat();
//            $fileName = $uploader->uploadPic($request->file('file'), $path);
//            if($fileName){
//                $input['cover'] = $fileName;
//            }else{
//                return Redirect::back()->with('error' , 'عکس ارسالی صحیح نیست.');
//            }
//        }

        // if ($request->hasFile('cover')) {
        //     $width = getimagesize($request->file('cover'))[0];
        //     $height = getimagesize($request->file('cover'))[1];
        //     $path = "assets/uploads/content/cat/";

             
        //     $extension=$request->file('cover')->getClientOriginalExtension();
        //     $fileName=md5(microtime()).".$extension";
        //     $request->file('cover')->move($path,$fileName);
        //     $input['cover']=$fileName;
        // }else{
        //     return Redirect::back()->with('error' , 'لطفا تصویر را وارد کنید');
        // }



            $category = Categories::create($input);
        $category->update([
            'url' => 'cat/'.$category->id,
        ]);
        // $array = array($input);
        // $serialized_array = serialize($array);

        // $log = Logs::log(url()->current(),$serialized_array,Auth::id(),$category->id);
        return Redirect::action('Admin\CategoryController@getCategory')->with('success', 'کد مورد نظر با موفقیت اضافه شد');
    }


}
