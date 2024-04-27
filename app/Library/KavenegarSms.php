<?php 

namespace App\Library;

class KavenegarSms
{
    private $token ="4E65797A58324642466B6247726D2B493978584D537A7A6976456E4F596878463635364F367872746735633D";
    private $baseUrl ="https://api.kavenegar.com/v1";

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
    public function sendLookup(string $template,array $tokens,string $mobile,string $type ="sms"){
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

