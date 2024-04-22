<?php 

namespace App\Library;

class KavenegarSms
{
    private $token ="7A57772B6665707042712F58726E73446837496A5638684357425254616C467A66586C55677050475245593D";
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

