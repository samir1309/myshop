<?php

namespace App\Http\Controllers\Admin;

use App\Events\LogUserEvent;
use App\Exports\UserExport;

use App\Http\Requests\PasswordRequest;
use App\Http\Requests\UserRequest;
use App\Library\Helper;
use App\Library\Logs;
use App\Models\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;




class PermissionController extends Controller
{

    public function getPermission() {

        $data = Role::all();
        return View('admin.admin.permission.index')
            ->with('data', $data);
    }
    
    public function getAddPermission() {
        return View('admin.admin.permission.add');
    }
    public function postAddPermission(Request $request){

        $role = new Role();
        $role->name = $request->get('name');
        $role->permission = serialize($request['access'] + ['fullAccess' => 0]);
        $role->save();

    //        event(new LogUserEvent($role->id, 'add', Auth::id()));
        if ($role->save()) {

            return Redirect::action([PermissionController::class, 'getPermission'])->with('success', 'آیتم جدید اضافه شد.');
        }

    }
    public function getEditPermission($id)   {
        $data = Role::findorfail($id);
        return View('admin.admin.permission.edit')
            ->with('data', $data);
    }
    public function postEditPermission($id, Request $request)  {
        $role = Role::find($id);
        $role->name = $request->get('name');
        $role->permission = serialize($request['access'] + ['fullAccess' => 0]);
        $role->save();
//        event(new LogUserEvent($role->id, 'edit', Auth::id()));
        if ($role->save()) {

            return Redirect::action([PermissionController::class, 'getPermission'])->with('success', 'آیتم مورد نظر با موفقیت ویرایش شد.');
        }

    }
    public function getDeletePermission($id) {
        $role=Role::find($id);
        $serialized_array = serialize($role);
        $log = Logs::log(url()->current(),$serialized_array,Auth::id(),$role->id);
        Role::destroy($id);

        return Redirect::back()->with('success','آیتم موردنظر با موفقیت حذف شد');


    }

}
