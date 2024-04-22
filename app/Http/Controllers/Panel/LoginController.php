<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\StringUtils;
use App\Library\Helper;
use App\Library\KavenegarSms;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Kavenegar\KavenegarApi;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getlogin()
    {
        return view('site.auth.signin');
    }

    public function postlogins(Request $request)
    {
        $correctlogin = $request->only('mobile', 'password');

        if (Auth::attempt($correctlogin)) {
      
            return redirect('panel/dashboard')->with('success', 'خوش آمدید');
       
           
      
        }
      
        return redirect('/panel/register')->with('error', 'شما ثبت نام نکردید');
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('site.panel.dashboard');
    }

    public function create()
    {
        return view('site.auth.signup');
    }



  
public function store(RegisterRequest $request)
{
  $user = new User;
  $user->name = $request->name;
  $user->email = $request->email;
  $user->setMobileAttribute($request->mobile);

  // generate random code
  $tokens = rand(100000,999999);

  $user->confirm_code =$tokens;

  $user->setPasswordAttribute($request->password);
  $user->save();
  $sms = new KavenegarSms;
  $sms->sendLookup('confirm',['tokens' =>$tokens],$user->mobile);
  return redirect('panel/confirm/'.$user->mobile)->with('success', 'کد تایید ارسال شد');

}

public function getConfirm($mobile,Request $request)
    {
        return view('site.auth.confirm')->with('mobile',$mobile);

    }

    public function postConfirm(Request $request)
    {
        set_time_limit(30000000000);

        $input = $request->all();

        $user = User::where('confirm_code', Helper::persian2LatinDigit($request->get('confirm_code')))->first();

        if ($user) {
            $user->mobile_confirm = true;
            $user->save();
            $user->assignRole([4]);
            Auth::loginUsingId($user->id);
           return redirect('panel/dashboard');
         
    }
}



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

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
