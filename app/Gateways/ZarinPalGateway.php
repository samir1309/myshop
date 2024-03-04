<?php

namespace App\Gateways;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class ZarinPalGateway
{
    public function redirectToGateway($data)
    {
        $response = Http::asForm()->post('https://api.zarinpal.com/pg/v4/payment/request.json', $data);

        $result = $response->json();

        if (empty($result['errors'])) {
            if ($result['data']['code'] == 100) {
                return redirect('https://www.zarinpal.com/pg/StartPay/'.$result['data']['authority']);
            }
        } else {
            return $result['errors']['message'];
        }
    }

    // برای  verifyPayment: 

public function verifyPayment($data)
{
   $response = Http::asForm()->post('https://api.zarinpal.com/pg/v4/payment/verify.json', $data);

   $result = $response->json();

   // verification code

   return $result;
}
}
