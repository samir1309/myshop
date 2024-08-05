<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;


class SocialController extends Controller
{
    
    public function get()
    {
        $uploader = Social::get();
        return View('admin.social.index')
            ->with('uploader', $uploader);
    }

    public function getAdd()
    {
        return View('admin.social.add');

    }

    public function postAdd(Request $request)
    {
        $input = $request->all();
        $uploader = Social::create($input);
        return redirect()->route('admin.social.index')->with('success', 'کد مورد نظر با موفقیت اضافه شد');

    }

    public function getEdit($id)
    {
        $data = Social::find($id);
        return View('admin.social.edit')
            ->with('data', $data);
    }

    public function postEdit($id, Request $request)
    {
        $input = $request->all();
        $content = Social::find($id);
        $content->update($input);
        return redirect()->route('admin.social.index')->with('success', 'کد مورد نظر با موفقیت اضافه شد');

    }
    public function getDelete($id)
    {

        $content = Social::find($id);
        Social::destroy($id);
        return redirect()->route('admin.social.index')->with('success', 'کد مورد نظر با موفقیت اضافه شد');


    }

}
