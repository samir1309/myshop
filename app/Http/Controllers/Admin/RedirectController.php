<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Redirect;

class RedirectController extends Controller
{
    public function getRedirect(){

        $redirect = Redirect::orderby('id','DESC')->paginate(100);

        return view('admin.redirect.index')
            ->with('redirect', $redirect);
    }
    public function getRedirectAdd(){
        return view('admin.redirect.add');

    }
    public function postRedirectAdd(Request $request)  
{  
   

    // Create a new redirect record in the database  
    $redirect = new Redirect();  
    $redirect->old_address  = $request['old_address'];  
    $redirect->new_address = $request['new_address'];  
    $redirect->save();  

    // Redirect the user to the admin panel or a success page  
    return redirect()->route('admin.redirect.index')->with('success', 'Redirect added successfully.');  
}
public function getRedirectDelete($id)  
{  
    // Find the redirect record by ID  
    $redirect = Redirect::findOrFail($id);  
    $redirect->delete();  
    return view('admin.redirect.index');
} 

}
