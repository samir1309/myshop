<?php

namespace App\Http\Controllers\Admin;
use app\Library\MakeTree;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\models\Category;
use App\Library\UploadsImg;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;



class CategoryController extends Controller
{
    
    public function getCategory()
    {
        $category = Category::orderBy('id' , 'Desc')->paginate(50);
        if (!($category)) {
            MakeTree::getData($category);
            $category = MakeTree::GenerateArray(array('paginate' => 100));
        }
        return View('admin.category.index' , compact('category'));
       
    }

    
    public function getAddCategory()
    {
        $categories = Category::all()->toArray();
        if (!empty($categories)) {
            MakeTree::getData($categories);
            $categories = MakeTree::GenerateArray(array('get'));
        }
        return View('admin.category.add' , compact('categories'));
    
    }

    public function postAddCategory(CategoryRequest $request)
    {
        $input = $request->all();
        $input['status'] = $request->has('status');
        if ($request->hasFile('cover')) {
            $path = "assets/uploads/content/cat/";
            $section = 'category' ; 
            $resize = true ;
            $uploader = new UploadsImg();
            $fileName = $uploader->uploadPic( $request , $request->file('cover'), $path  ,  $resize ,  $section  );
                $input['cover'] = $fileName;
        }


            $category = Category::create($input);
       
        return Redirect::action('Admin\CategoryController@getCategory')->with('success', 'کد مورد نظر با موفقیت اضافه شد');
    }

    public function getEditCategory($id)
     {
        $data = Category::findOrFail($id);
        $category = Category:: where('id' , '<>' , $data->id )->orderby('id', 'DESC')->get()->toArray();
        if (!empty($category)) {
            MakeTree::getData($category);
            $category = MakeTree::GenerateArray(array('get'));
        }
        else {
            $category = array (null =>  ' دسته اصلی');
         
        }
      

return view('admin.category.edit' )
->with('data',$data)
->with('categories',$category)
->with('parent_id',$category);

    }

    public function postEditCategory($id , CategoryRequest $request)
    {

       $input = $request->all();
       $input['status'] = $request->has('status');
       $category = Category :: FindOrFail($id);
    if ($request->hasFile('cover')) {
        $path = "assets/uploads/content/cat/";
        File::delete($path . '/big/' . $category->cover);
        File::delete($path . '/medium/' . $category->cover);
        File::delete($path . '/small/' . $category->cover);
        $section = 'category' ; 
        $resize = true ;
        $uploader = new UploadsImg();
        $fileName = $uploader->uploadPic( $request , $request->file('cover'), $path  ,  $resize ,  $section  );
            $input['cover'] = $fileName;
        }
    if ($request->has('parent_id')) {
        $input['parent_id'] = $request->get('parent_id');
    } else {
        $input['parent_id'] = null;
    }
$category->update($input);

return Redirect::action('Admin\CategoryController@getCategory');

    }
}

