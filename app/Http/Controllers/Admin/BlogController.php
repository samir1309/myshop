<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Library\UploadImg;
use App\Library\UploadImgArt;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;


class BlogController extends Controller
{


    public function getArticle()
    {
       $articles = Blog::orderBy('id' , 'Desc')->paginate(50);
       return view('admin.blog.index' , compact('articles'));
    }


    public function getAddArticle()
    {
       $blogcategory = BlogCategory :: orderBy('id' , 'Desc')->get(['id','title']);
       return view('admin.blog.add' , compact('blogcategory'));
    
    }

    public function postAddArticle(BlogRequest $request)
    {
        $input = $request->all();

           if ($request->hasFile('image')) {
            $path = "assets/uploads/content/art/";
            $uploader = new UploadImgArt();
            $fileName = $uploader->uploadPic($request->file('image'), $path);
            if($fileName){
                $input['image'] = $fileName;
            }else{
                return Redirect::back()->with('error' , 'عکس ارسالی صحیح نیست.');
            }
        }
        $input['status'] = $request->has('status');
       Blog ::create($input);
        return Redirect::action('Admin\BlogController@getArticle')->with('success', 'کد مورد نظر با موفقیت اضافه شد');
    }

    public function getEditArticle($id )
{
    $article = Blog::findOrFail($id);
    $blogcategory = BlogCategory :: orderBy('id' , 'Desc')->get(['id','title']);
    return view('admin.blog.edit' , compact('article' , 'blogcategory'));

}

public function postEditArticle($id , BlogRequest $request)
{
    $input = $request->all();
    $input['status'] = $request->has('status');
    $content = Blog::findOrFail($id);
    if ($request->hasFile('image')) {
        $path = "assets/uploads/content/art/";
        File::delete($path . '/big/' . $content->image);
        File::delete($path . '/medium/' . $content->image);
        File::delete($path . '/small/' . $content->image);
        $uploader = new UploadImgArt();
        $fileName = $uploader->uploadPic($request->file('image'), $path);
        if($fileName){
            $input['image'] = $fileName;
        } else{
            return Redirect::back()->with('error' , 'عکس ارسالی صحیح نیست.');
        }
    }
    else {
        $input['image'] = $content->image;
    }

   $content->update($input);
    return Redirect::action('Admin\BlogController@getArticle')->with('success', 'کد مورد نظر با موفقیت اضافه شد');








}
    
}
