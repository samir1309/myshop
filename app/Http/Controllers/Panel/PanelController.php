<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Kavenegar\KavenegarApi;
use App\Library\KavenegarSms;
use App\Rules\MobileRule;
use App\Rules\UniqueMobile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 


class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $user = Auth::user();
      
        return view('site.panel.dashboard')->with('user',$user);
    }

public function logout()
{
      auth()->logout();

      return redirect()->route('panel.login')
  ->with('status', 'رمز با موفقیت تغییر یافت!')
  ->with('alert-type', 'success');
  
}

    public function edit()
    {
        $user = Auth::user();
        return view('site.panel.dashboard.edit')->with('user',$user);
    }

    
    public function postEditInfo(Request $request) 
    { 
         $user = auth()->user();
          $user->name = $request->name;
          $user->email = $request->email; 
          if($user->mobile != $request->mobile)
        { 
            $code= random_int(100000, 999999);
            $user->update([
                'mobile'=> $request->mobile,
                'mobile_confirm'=> 0,
                'confirm_code' => $code
            ]);
        
          
            $sms = new KavenegarSms; 
            $response = $sms->sendLookup("شماره موبایل تغییر کرده است",['mobile'=>$request->mobile],$request->mobile); 
        
          
            return redirect('panel/confirm/'.$user->mobile)->with('success', 'لطفا تلفن خود را تایید کنید');
            
            } 
            $user->update($user);
          
            return redirect()->back()->with('success', 'اطلاعات با موفقیت ویرایش شدند');
        }
        
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
       public function setPasswordAttribute($password)
{
    $this->attributes['password'] = bcrypt($password);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
        // $user = Auth::user();
  
        // $validatedData = $request->validate([
        //     'password' => 'required|min:4',
        //     're-password' => 'required|same:password',
        // ]);
    
        // if (!Hash::check($request->current_password, $user->password)) {
        //     return back()->withErrors(['password' => 'رمز فعلی مطابقت ندارد']);
        // }

        
    
        // $user->setPasswordAttribute($request->password);
        // $user->save();
    
        // Auth::logout();
    
        // return redirect()->route('panel.login')->with('status', 'رمز با موفقیت تغییر یافت!');

        $input = $request->all();
        $user= $user = Auth::user();

        $user->update([
            'password'=>setPasswordAttribute($input['password'])
        ]);
       
    
        Auth::logout();
        return redirect()->route('panel.login')->with('status', 'رمز با موفقیت تغییر یافت!');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
