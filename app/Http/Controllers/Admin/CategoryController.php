<?php

namespace App\Http\Controllers\Admin;
use app\Library\MakeTree;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\models\Categories;
use App\Library\UploadsImg;
use Illuminate\Support\Facades\File;
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
        return View('admin.category.index')
            ->with('category', $category);
    }

    
    public function getAddCategory()
    {
        $categories = Categories::all()->toArray();
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
        $input['status'] = $request->has('status');

        if ($request->hasFile('cover')) {
            $path = "assets/uploads/content/cat/";
            $section = 'category' ; 
            $resize = true ;
            $uploader = new UploadsImg();
            $fileName = $uploader->uploadPic( $request , $request->file('cover'), $path  ,  $resize ,  $section  );
                $input['cover'] = $fileName;
        }


            $category = Categories::create($input);
        $category->update([
            'url' => 'cat/'.$category->id,
        ]);
        return Redirect::action('Admin\CategoryController@getCategory')->with('success', 'کد مورد نظر با موفقیت اضافه شد');
    }

    public function getEditCategory($id)
     {
        $data = Categories::findOrFail($id);
        $category = Categories:: where('id' , '<>' , $data->id )->orderby('id', 'DESC')->get()->toArray();
        if (!empty($category)) {
            MakeTree::getData($category);
            $category = MakeTree::GenerateArray(array('get'));
        }
        else {
            $category = array (null =>  ' دسته اصلی');
         
        }
      

return view('admin.category.edit')
->with('data',$data)
->with('categories',$category)
->with('parent_id',$category);

    }

    public function postEditCategory($id , CategoryRequest $request)
    {

       $input = $request->all();
       $input['status'] = $request->has('status');

       $category = Categories :: FindOrFail($id);
    
       if ($request->hasFile('cover')) {
        $path= "assets/uploads/content/cat/";
        $extension=$request->file('cover')->getClientOriginalExtension();
        File::delete($path . '/' . $category->cover);
        $fileName=md5(microtime()).".$extension";
        $request->file('cover')->move($path,$fileName);
        $input['cover']=$fileName;
    }else{
        $input['cover'] = $category->cover;
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

