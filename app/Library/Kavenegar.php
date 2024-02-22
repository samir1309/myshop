<?php 

namespace App\Library;

class Kavenegar
{
  public function sendSMS($mobile, $family, $orderId, $template, $type)
  {
    try {

      $curl = curl_init();

      curl_setopt_array($curl, [
        CURLOPT_URL => 'https://api.kavenegar.com/v1/61692F3769344F2F48626C64474D6C777478356F4E4F4C6a51463164414971714F6F7A703468743657664D3D/verify/lookup.json?receptor=' . $mobile . '&token10=' . urlencode($family) . '&token=' . $orderId . '&template=' . $template . '&type=' . $type,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '', 
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET'
      ]);

      $response = curl_exec($curl);

      curl_close($curl);

      return $response;

    } catch (ApiException $e) {
      \Log::info($e->getMessage());
    } catch (HttpException $e) {
      \Log::info($e->getMessage());
    }
  }

}
