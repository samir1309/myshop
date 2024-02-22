<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
   



    public function finishSaderat(Request $request)
    {

 
 

        $currentOrder = Order::where('id',$request->get('invoiceid'))->orderBy('id','DESC')->first();
     
        if(!$currentOrder){
             
                        return redirect('/')->with('error', 'خطا در پرداخت، مجدد تلاش نمایید.');

        }
  
         Auth::loginUsingId($currentOrder->user_id);
        if(Auth::id() == 1){
            $price = 10000;

        }else{
            $price = intval(str_replace(',', '', @$currentOrder->payment)).'0';
        }
        $order_items = OrderItem::where('order_id',$currentOrder->id)->get();
        

 
$terminal 		= "98307653"; // شماره ترمینال (TID)
 
$invoiceNumber 	= (isset($_POST['invoiceid'])) 		? $_POST['invoiceid'] 		: "";
$digitalreceipt = (isset($_POST['digitalreceipt'])) ? $_POST['digitalreceipt'] 	: "";
 
if(isset($_POST['respcode']) && $_POST['respcode'] == '0')
{
	$params = "digitalreceipt={$digitalreceipt}&Tid={$terminal}";
 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://sepehr.shaparak.ir:8081/V1/PeymentApi/Advice');
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$res = curl_exec($ch);
	curl_close($ch);
	$result = json_decode($res,true);
	

	if (strtoupper($result['Status']) == 'OK') 
	{ 
		if(floatval($result['ReturnId']) == floatval($price))
		{
		                $currentOrder->update([
                'tracking_code'=>@$digitalreceipt,
                'order_status_id'=>3,
                
            ]);

   $history = OrderHistory::create([
            'order_id'=>$currentOrder->id,
            'order_status_id'=> $currentOrder['order_status_id']
        ]);
        
         foreach($order_items as $row){
                $p = Product::find($row->product_id);
                $p->update([
                    'order_count'=>@$p->order_count + @$row->quantity
                ]);
            }

            $resids = [];
            foreach($order_items as $row){
                $resids = [
                    'inventory_id'=>1,
                    'product_id'=>@$row->product_id,
                    'count'=>@$row->quantity,
                    'inventory_type_id'=>2,
                    'user_id'=>Auth::id(),
                    
                    'product_specification_value_id'=>@$row->product_specification_value_id
                ];
                $resids = [
                    'inventory_id'=>1,
                    'product_id'=>@$row->product_id,
                    'count'=>@$row->quantity,
                    'inventory_type_id'=>2,
                    'user_id'=>Auth::id(),
                    'product_specification_value_id'=>@$row->product_specification_value_id
                ];
                $residCheck = [
                    'product_id'=>@$row->product_id,
                    'count'=>@$row->quantity,
                    'inventory_type_id'=>2,
                    'user_id'=>Auth::id(),
                    'product_specification_value_id'=>@$row->product_specification_value_id,
                    'controller'=>'ShopController/finishSaderat',
                    'factor_id'=>@$currentOrder->id
                ];
            }
            InventoryReceipt::insert($resids);
            checkLog::insert($residCheck);
             $admin = '09122038701';
             
  foreach($order_items as $row){
      $pro =  Product::find(@$row->product_id);
      if ($row->product_specification_value_id != null){
          $product_specification_check = ProductSpecification::find($row->product_specification_id);
          $product_specification_check->update([
              'stocks'=> intval(@$product_specification_check->stocks) - intval(@$row->quantity)
          ]);
          $pro->update([
              'stocks'=>intval($pro->sprcificationstocks->sum('stocks'))
          ]);
          $product_min = ProductSpecification::orderBy('price', 'ASC')->where('product_id', $pro->id)->where('stocks', '<>', '0')->where('price', '<>', '0')->first();
          if ($product_min) {
              if ($product_min->price != 0) {
                  $pro->update([
                      'price' => @$product_min->price,
                      'old_price' => @$product_min->old_price,
                  ]);
              } else {
                  $pro->update([
                      'price' => @$product_min->old_price,
                      'old_price' => 0,
                  ]);
              }

          } else {
              $pro->update([
                  'price' => 0,
                  'old_price' => 0,
              ]);
          }
      }
      else{
          $pro->update([
              'stocks'=> intval(@$pro->stocks) - intval(@$row->quantity)
          ]);
      }





                if (self::getInventoryCount(@$row->product,@$row->productSpecificationValue) == 0){

                    if (@$row->product_specification_value_id != null){
                      try{

                            $curl = curl_init();
                            curl_setopt_array($curl, array(
                                CURLOPT_URL => 'https://api.kavenegar.com/v1/61692F3769344F2F48626C64474D6C777478356F4E4F4C6A51463164414971714F6F7A703468743657664D3D/verify/lookup.json?receptor='.@$admin.'&token10='.urlencode(@$row->productSpecificationValue->title).'&template=stock&type=sms',
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => '',
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 0,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => 'GET',

                            ));
                            $response = curl_exec($curl);

                            curl_close($curl);


                        }
                        catch(ApiException $e){
                            \Log::info($e->errorMessage());
                        }
                        catch(HttpException $e){
                            \Log::info($e->errorMessage());
                        }
                    }
                    else{
                         try{

                            $curl = curl_init();
                            curl_setopt_array($curl, array(
                                CURLOPT_URL => 'https://api.kavenegar.com/v1/61692F3769344F2F48626C64474D6C777478356F4E4F4C6A51463164414971714F6F7A703468743657664D3D/verify/lookup.json?receptor='.@$admin.'&token10='.urlencode(@$row->product->title).'&template=stock&type=sms',
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => '',
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 0,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => 'GET',

                            ));
                            $response = curl_exec($curl);

                            curl_close($curl);


                        }
                        catch(ApiException $e){
                            \Log::info($e->errorMessage());
                        }
                        catch(HttpException $e){
                            \Log::info($e->errorMessage());
                        }
                    }

                }

            }


            // try{

            //     $curl = curl_init();
            //     curl_setopt_array($curl, array(
            //         CURLOPT_URL => 'https://api.kavenegar.com/v1/61692F3769344F2F48626C64474D6C777478356F4E4F4C6A51463164414971714F6F7A703468743657664D3D/verify/lookup.json?receptor='.@$currentOrder->user->mobile.'&token10='.urlencode(@$currentOrder->user->family).'&token='.@$currentOrder->id.'&template=buy&type=sms',
            //         CURLOPT_RETURNTRANSFER => true,
            //         CURLOPT_ENCODING => '',
            //         CURLOPT_MAXREDIRS => 10,
            //         CURLOPT_TIMEOUT => 0,
            //         CURLOPT_FOLLOWLOCATION => true,
            //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //         CURLOPT_CUSTOMREQUEST => 'GET',

            //     ));
            //     $response = curl_exec($curl);

            //     curl_close($curl);


            // }
            // catch(ApiException $e){
            //     \Log::info($e->errorMessage());
            // }
            // catch(HttpException $e){
            //     \Log::info($e->errorMessage());
            // }


            $kavenegar = new Kavenegar();
            $response = $kavenegar->sendSMS($currentOrder->user->mobile, $currentOrder->user->family, $currentOrder->id, 'cancel', 'sms');


            

            try{
                $api = new KavenegarApi("61692F3769344F2F48626C64474D6C777478356F4E4F4C6A51463164414971714F6F7A703468743657664D3D");
                $receptor = "09122038701";
                $token = @$currentOrder->id;
                $token2 = @$currentOrder->payment;
                $token3 = "";
                $template = "factor";
                $type = "sms";//sms | call
                $result = $api->VerifyLookup($receptor,$token,$token2,$token3,$template,$type);
            }
            catch(ApiException $e){
                \Log::info($e->errorMessage());
            }
            catch(HttpException $e){
                \Log::info($e->errorMessage());
            }
            try{
                $api = new KavenegarApi("61692F3769344F2F48626C64474D6C777478356F4E4F4C6A51463164414971714F6F7A703468743657664D3D");
                $receptor = "09122038701";
                $token = @$currentOrder->id;
                $token2 = @$currentOrder->payment;
                $token3 = "";
                $template = "factor";
                $type = "sms";//sms | call
                $result = $api->VerifyLookup($receptor,$token,$token2,$token3,$template,$type);
            }
            catch(ApiException $e){
                \Log::info($e->errorMessage());
            }
            catch(HttpException $e){
                \Log::info($e->errorMessage());
            }

//   if ($currentOrder->user->email != null){
//                 Mail::send(array('html' => 'factor'), array('text' => $currentOrder), function($message) use ($currentOrder)
//                 {
//                     $message->from("admin@kabinmobtake.com"  , 'From:admin');
//                     $message->to($currentOrder->user->email)->subject($currentOrder->id);
//                 });
//             }
//             Mail::send(array('html' => 'factor'), array('text' => $currentOrder), function($message) use ($currentOrder)
//             {
//                 $message->from("admin@kabinmobtaker.com"  , 'From:admin');
//                 $message->to('info@kabinmobtaker.com')->subject($currentOrder->id);
//             });

            return redirect()->route('panel.order.success',['id'=>$currentOrder->id])->with('success','پرداخت با موفقیت انجام شد');
        
		}
		}
		else {
        $currentOrder->update([
                'order_status_id'=>10,
                'ref_id'=>@$digitalreceipt
            ]);
               $history = OrderHistory::create([
            'order_id'=>$currentOrder->id,
            'order_status_id'=> $currentOrder['order_status_id']
        ]);
            if (@$currentOrder->user->mobile){
               try{

                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://api.kavenegar.com/v1/61692F3769344F2F48626C64474D6C777478356F4E4F4C6A51463164414971714F6F7A703468743657664D3D/verify/lookup.json?receptor='.@$currentOrder->user->mobile.'&token10='.urlencode($currentOrder->user->family).'&token='.@$currentOrder->id.'&template=cancel&type=sms',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'GET',

                    ));
                    $response = curl_exec($curl);

                    curl_close($curl);


                }
                catch(ApiException $e){
                    \Log::info($e->errorMessage());
                }
                catch(HttpException $e){
                    \Log::info($e->errorMessage());
                }

            }
            return redirect('/')->with('error', 'خطا در پرداخت، مجدد تلاش نمایید.');
      	}
} else {
            $currentOrder->update([
                'order_status_id'=>10,
                                'ref_id'=>@$digitalreceipt

            ]);
               $history = OrderHistory::create([
            'order_id'=>$currentOrder->id,
            'order_status_id'=> $currentOrder['order_status_id']
        ]);
            if (@$currentOrder->user->mobile){
               try{

                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://api.kavenegar.com/v1/61692F3769344F2F48626C64474D6C777478356F4E4F4C6A51463164414971714F6F7A703468743657664D3D/verify/lookup.json?receptor='.@$currentOrder->user->mobile.'&token10='.urlencode($currentOrder->user->family).'&token='.@$currentOrder->id.'&template=cancel&type=sms',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'GET',

                    ));
                    $response = curl_exec($curl);

                    curl_close($curl);


                }
                catch(ApiException $e){
                    \Log::info($e->errorMessage());
                }
                catch(HttpException $e){
                    \Log::info($e->errorMessage());
                }

            }
            return redirect('/')->with('error', 'خطا در پرداخت، مجدد تلاش نمایید.');
      
}

    }

    
}
