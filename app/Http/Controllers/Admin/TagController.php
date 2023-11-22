<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library\Logs;
use App\Library\Relate;
use App\Library\TagClass;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Taggable;
use Classes\UploadImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function get(){
        $data = Tag::orderby('id','DESC')->paginate(100);
        return view('admin.tag.index')
            ->with('data',$data);
    }
    public function getAdd(){

        return view('admin.tag.add');
    }
    public function postAdd(Request $request){
        $input = $request->all();
        $input['index'] = $request->has('index');
        if ($request['url'] != null){
            $input['url'] = Str::slug($input['url']);
        }else{
            $input['url'] = Str::slug($input['title']);
        }
        $tag= Tag::create($input);
        if($request->has('product_ids')) {
            TagClass::relates($input['product_ids'], $tag->id, $input['datable_type'], false);
        }
        $array = array($input);
        $serialized_array = serialize($array);
        $log = Logs::log(url()->current(),$serialized_array,Auth::id(),$tag->id);

        return Redirect::action('Admin\TagController@get')->with('success' , 'آیتم مورد نظر با موفقیت ویرایش شد');
    }
    public function getEdit($id){
        $data = Tag::find($id);
        $products = Product::orderby('id','DESC')->get();
        return view('admin.tag.edit')
            ->with('products',$products)
            ->with('data',$data);
    }

    public function postEdit(Request $request , $id){
        $input = $request->all();
        $tag = Tag::find($id);
        $input['index'] = $request->has('index');
        if ($request['url'] != null){

            $input['url'] = Str::slug($input['url']);
        }else{
            $input['url'] = Str::slug($input['title']);
        }

        $tag->update($input);
        if ($request->get('product_ids') !== null) {
            $pro = Taggable::where('tag_id',$tag->id)->where('taggable_type',"App\Models\Product")->delete();
            TagClass::relates($input['product_ids'], $tag->id, $input['datable_type'], true);
        }
        else{
            $pro = Taggable::where('tag_id',$tag->id)->where('taggable_type',"App\Models\Product")->delete();
        }
        $array = array($input);
        $serialized_array = serialize($array);
        $log = Logs::log(url()->current(),$serialized_array,Auth::id(),$tag->id);

            return Redirect::action('Admin\TagController@get')->with('success' , 'آیتم مورد نظر با موفقیت ویرایش شد');
        }

    public function postDelete(Request $request)
    {
        if (Tag::destroy($request->get('deleteId'))) {
            return Redirect::back()
                ->with('success', 'کدهای مورد نظر با موفقیت حذف شدند.');
        }

    }



}
