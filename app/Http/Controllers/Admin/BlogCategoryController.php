<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Library\Logs;
use app\Library\MakeTree;
use App\Library\UploadsImg;
use App\Http\Requests\BlogCategoryRequest;
use app\Library\UploadImg;
use App\Models\BlogCategory;
use App\Library\UploadImgArt;

use Classes\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class BlogCategoryController extends Controller
{

  
    public function getArticleCat()
    {
        $category = BlogCategory::orderby('id','DESC')->paginate(50);
        return View('admin.blog-cat.index')
            ->with('category', $category);
    }

    
    public function getAddArticleCat()
    {
        $categories = BlogCategory::orderby('id','DESC')->get();
     
        return View('admin.blog-cat.add')
            ->with('categories', $categories);
    }

    public function postAddArticleCat(BlogCategoryRequest $request)
    {
        $input = $request->all();
        $input['status'] = $request->has('status');
   


        if ($request->hasFile('image')) {
            $path = "assets/uploads/content/art/";
            $section = 'blogcat' ; 
            $resize = true ;
            $uploader = new UploadsImg();
            $fileName = $uploader->uploadPic( $request , $request->file('image'), $path  ,  $resize  ,  $section  );
                $input['image'] = $fileName;
        }else{
             return Redirect::back()->with('error' , 'عکس ارسالی صحیح نیست.');
         }
     


        $category = BlogCategory::create($input);
      
        return redirect()->route('admin.blog-cat.index')->with('success', 'کد مورد نظر با موفقیت اضافه شد');

    }

    public function getEditArticleCat($id)
     {
        $data = BlogCategory::findOrFail($id);
        $category = BlogCategory:: where('id' , '<>' , $data->id )->orderby('id', 'DESC')->get()->toArray();
     
      

            return view('admin.blog-cat.edit')
            ->with('data',$data)
            ->with('categories',$category);

    }

    public function postEditArticleCat($id , BlogCategoryRequest $request)
    {

       $input = $request->all();
       $input['status'] = $request->has('status');
       $category = BlogCategory :: FindOrFail($id);
       if ($request->hasFile('image')) {
        $path = "assets/uploads/content/art/";
        File::delete($path . '/big/' . $category->image);
        File::delete($path . '/medium/' . $category->image);
        File::delete($path . '/small/' . $category->image);
        $section = 'blogcat' ; 
        $resize = true ;
        $uploader = new UploadsImg();
        $fileName = $uploader->uploadPic( $request , $request->file('image'), $path  ,  $resize ,  $section  );
            $input['image'] = $fileName;
    }
    else {
        $input['image'] = $category->image;
    }
$category->update($input);
return redirect()->route('admin.blog-cat.index')->with('success', 'کد مورد نظر با موفقیت اضافه شد');



    }

    
}

 


