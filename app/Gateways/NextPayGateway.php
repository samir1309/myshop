<?php

namespace App\Gateways;

class NextPayGateway
{
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function createToken($amount, $orderId, $customerPhone, $customJsonFields, $callbackUri)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nextpay.org/nx/gateway/token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'api_key=' . $this->apiKey . '&amount=' . $amount . '&order_id=' . $orderId . '&customer_phone=' . $customerPhone . '&custom_json_fields=' . $customJsonFields . '&callback_uri=' . $callbackUri,
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }


    
    public function verifyTransaction($amount, $transactionId)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nextpay.org/nx/gateway/verify',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'api_key=' . $this->apiKey . '&amount=' . $amount . '&trans_id=' . $transactionId,
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}