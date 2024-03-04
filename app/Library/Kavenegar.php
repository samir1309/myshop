<?php 

namespace App\Library;

class KavenegarSms
{
    private $token = "6962686E2B595051784C4C59537832547035346C39654838454F5674346E39674C73717068413858484A493D";
    private $baseUrl = "https://api.kavenegar.com/v1";
    public function execute(string $url){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "$this->baseUrl/$this->token/$url",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public function sendLookup(string $template,array $tokens,string $mobile,string $type = "sm"){
        $tokens_query = http_build_query($tokens);
        $url = "verify/lookup.json?receptor=$mobile&type=$type&template=$template&$tokens_query";
        try {
            return $this->execute($url);
        } catch (\Exception $e) {
            Log::info($e);
            return false;
        }
    }
}

// foreach ($ten_events as $ten_event) {
//     $user_sms = User::find($ten_event['user_id']);
//     $kavenegar = new KavenegarSms();
//     $kavenegar->sendLookup(
//         "ten-event",
//         [
//             "token10"=>$user_sms->name,
//             "token"=>'FREEDELIVERY',
//         ],
//         $user_sms->mobile
//     );

// }