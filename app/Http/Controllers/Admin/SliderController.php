<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Http\Requests\MobileSliderRequest;
use App\Http\Requests\SliderRequest;
use App\Http\Requests\StoreUserRequest;
use App\Library\Logs;
use App\Library\UploadImgBanner;
use App\Library\UploadImgMbanner;
use App\Library\UploadImgMslider;
use App\Library\UploadImgSlider;
use App\Models\Content;
use Classes\UploadImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class SliderController extends Controller
{



    public function getSlider(Request $request)
    {
        $query = Content::query();
        $query->wherein('content_type',[2,3,6,7]);

        if ($request->get('content_type')) {
            $query->where('content_type','LIKE','%'.$request->get('content_type').'%');

        }
        $slider = $query->orderBy('id','DESC')->paginate(100);
        $categorySort = Content::orderby('sort', 'ASC')->where('content_type',2)->get();

        $categorySort2 = Content::orderby('sort', 'ASC')->where('content_type',6)->get();
        $categorySort3 = Content::orderby('sort', 'ASC')->where('content_type',7)->get();
        $categorySort4 = Content::orderby('sort', 'ASC')->where('content_type',3)->get();
        return View('admin.slider.index')
            ->with('categorySort', $categorySort)
            ->with('categorySort2', $categorySort2)
            ->with('categorySort3', $categorySort3)
            ->with('categorySort4', $categorySort4)
            ->with('slider', $slider);
    }
    public function getAddSlider()
    {
        return View('admin.slider.add');

    }

    public function postAddSlider(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $width = getimagesize($request->file('image'))[0];
            $height = getimagesize($request->file('image'))[1];


            if ($input['content_type'] == 2){
                if ($width > 2001){
                    return Redirect::back()->with('error' , 'عرض عکس از ۲۰۰۰ بیشتر است.');
                }
                if ($height > 651){
                    return Redirect::back()->with('error' , 'طول عکس از ۶۵۰ بیشتر است.');
                }
            }else{
                if ($width > 651){
                    return Redirect::back()->with('error' , 'عرض عکس از ۶۵۰ بیشتر است.');
                }
                if ($height > 651){
                    return Redirect::back()->with('error' , 'طول عکس از ۶۵۰ بیشتر است.');
                }
            }
            $path = "assets/uploads/content/sli/";
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileName=md5(microtime()).".$extension";
            $request->file('image')->move($path,$fileName);
            $input['image']=$fileName;
        }else{
            return Redirect::back()->with('error' , 'لطفا تصویر را وارد کنید');
        }

        $slider = Content::create($input);
        if ($slider->url == null){
            $slider->update([
                'url' => 'banner/'.$slider->id,
            ]);
        }
        $array = array($input);
        $serialized_array = serialize($array);

        $log = Logs::log(url()->current(),$serialized_array,Auth::id(),$slider->id);
        return redirect()->route('admin.slider.index');

    }

    public function getEditSlider($id)
    {
        $data = Content::orderBy('id','DESC')->find($id);
        return View('admin.slider.edit')
            ->with('data', $data);
    }

    public function postEditSlider($id, Request $request)
    {
        $input = $request->all();

        $content = Content::find($id);
       if ($request->hasFile('image')) {
           $width = getimagesize($request->file('image'))[0];
           $height = getimagesize($request->file('image'))[1];

            $path = "assets/uploads/content/sli/";

            if ($input['content_type'] == 2){
                if ($width > 2001){
                    return Redirect::back()->with('error' , 'عرض عکس از ۲۰۰۰ بیشتر است.');
                }
                if ($height > 651){
                    return Redirect::back()->with('error' , 'طول عکس از ۶۵۰ بیشتر است.');
                }
            }else{
                 if ($width > 651){
                    return Redirect::back()->with('error' , 'عرض عکس از ۶۵۰ بیشتر است.');
                }
                if ($height > 651){
                    return Redirect::back()->with('error' , 'طول عکس از ۶۵۰ بیشتر است.');
                }
            }
           $extension=$request->file('image')->getClientOriginalExtension();
 File::delete($path . '/' . $content->image);
           $fileName=md5(microtime()).".$extension";
           $request->file('image')->move($path,$fileName);
           $input['image']=$fileName;
        }else{
            $input['image'] = $content->image;
        }
        $content->update($input);
        $array = array($input);
        $serialized_array = serialize($array);

        $log = Logs::log(url()->current(),$serialized_array,Auth::id(),$content->id);
        return redirect()->route('admin.slider.index');
    }
    public function getDeleteSlider($id)
    {

        $content = Content::find($id);
        File::delete('assets/uploads/content/sli/' . $content->image);
        $array = array($content);
        $serialized_array = serialize($array);

        $log = Logs::log(url()->current(),$serialized_array,Auth::id(),$content->id);
        Content::destroy($id);

        return redirect()->route('admin.slider.index');

    }

    public function postDeleteSlider(Request $request)
    {
        if (Content::destroy($request->get('deleteId'))) {
            return Redirect::back()
                ->with('success', 'کدهای مورد نظر با موفقیت حذف شدند.');
        }

    }
    public function getMobile()
    {
        $mobile = Content::orderBy('id','DESC')->wherein('content_type',[8,9,10,11])
            ->paginate(100);
        $categorySort5 = Content::orderby('sort', 'ASC')->where('content_type',8)->get();

        $categorySort6 = Content::orderby('sort', 'ASC')->where('content_type',9)->get();
        $categorySort7 = Content::orderby('sort', 'ASC')->where('content_type',10)->get();
        $categorySort8 = Content::orderby('sort', 'ASC')->where('content_type',11)->get();

        return View('admin.slider-mobile.index')
            ->with('categorySort5', $categorySort5)
            ->with('categorySort6', $categorySort6)
            ->with('categorySort7', $categorySort7)
            ->with('categorySort8', $categorySort8)

            ->with('slider', $mobile);
    }


    public function getAddMobile()
    {
        return View('admin.slider-mobile.add');

    }

    public function postAddMobile(MobileSliderRequest $request)
    {
        $input = $request->all();

         if ($request->hasFile('image')) {
             $width = getimagesize($request->file('image'))[0];
             $height = getimagesize($request->file('image'))[1];
            $path = "assets/uploads/content/sli/";
            if ($input['content_type'] == 10){
                if ($width > 701){
                    return Redirect::back()->with('error' , 'عرض عکس از ۷۰۰ بیشتر است.');
                }
                if ($height > 801){
                    return Redirect::back()->with('error' , 'طول عکس از ۸۰۰ بیشتر است.');
                }
            }else{
                if ($width > 501){
                    return Redirect::back()->with('error' , 'عرض عکس از ۵۰۰ بیشتر است.');
                }
                if ($height > 501){
                    return Redirect::back()->with('error' , 'طول عکس از ۵۰۰ بیشتر است.');
                }
            }
             $extension=$request->file('image')->getClientOriginalExtension();
             $fileName=md5(microtime()).".$extension";
             $request->file('image')->move($path,$fileName);
             $input['image']=$fileName;
         }else{
             return Redirect::back()->with('error' , 'لطفا تصویر را وارد کنید');
         }


        $slider = Content::create($input);
        if ($slider->url == null){
            $slider->update([
                'url' => 'banner/'.$slider->id,
            ]);
        }
        $array = array($input);
        $serialized_array = serialize($array);

        $log = Logs::log(url()->current(),$serialized_array,Auth::id(),$slider->id);
        return Redirect::action('Admin\SliderController@getMobile');
    }

    public function getEditMobile($id)
    {
        $data = Content::orderBy('id','DESC')->find($id);
        return View('admin.slider-mobile.edit')
            ->with('data', $data);
    }

    public function postEditMobile($id, MobileSliderRequest $request)
    {
        $input = $request->all();

        $content = Content::find($id);
        if ($request->hasFile('image')) {
            $width = getimagesize($request->file('image'))[0];
            $height = getimagesize($request->file('image'))[1];
            $path = "assets/uploads/content/sli/";
            File::delete($path . '/' . $content->image);

            if ($input['content_type'] == 10){
                if ($width > 701){
                    return Redirect::back()->with('error' , 'عرض عکس از ۷۰۰ بیشتر است.');
                }
                if ($height > 801){
                    return Redirect::back()->with('error' , 'طول عکس از ۸۰۰ بیشتر است.');
                }
            }else{
                if ($width > 501){
                    return Redirect::back()->with('error' , 'عرض عکس از ۵۰۰ بیشتر است.');
                }
                if ($height > 501){
                    return Redirect::back()->with('error' , 'طول عکس از ۵۰۰ بیشتر است.');
                }
            }
            $extension=$request->file('image')->getClientOriginalExtension();

            $fileName=md5(microtime()).".$extension";
            $request->file('image')->move($path,$fileName);
            $input['image']=$fileName;
        }else{
            $input['image'] = $content->image;
        }
        $content->update($input);
        $array = array($input);
        $serialized_array = serialize($array);

        $log = Logs::log(url()->current(),$serialized_array,Auth::id(),$content->id);
        return Redirect::action('Admin\SliderController@getMobile');
    }
    public function getDeleteMobile($id)
    {

        $content = Content::find($id);
        File::delete('assets/uploads/content/sli/' . $content->image);
        $array = array($content);
        $serialized_array = serialize($array);

        $log = Logs::log(url()->current(),$serialized_array,Auth::id(),$content->id);
        Content::destroy($id);

        return Redirect::action('Admin\SliderController@getMobile');

    }

    public function postDeleteMobile(Request $request)
    {
        if (Content::destroy($request->get('deleteId'))) {
            return Redirect::back()
                ->with('success', 'کدهای مورد نظر با موفقیت حذف شدند.');
        }

    }
    public function postSort(Request $request)
    {

        if ($request->get('update') == "update") {
            $count = 1;
            if ($request->get('update') == 'update') {
                foreach ($request->get('arrayorder') as $idval) {

                    $category = Content::find($idval);
                    $category->sort = $count;
                    $category->save();
                    $count++;
                }
                echo 'با موفقیت ذخیره شد.';
            }
        }
    }



}
