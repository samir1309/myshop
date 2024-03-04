<?php

namespace App\Gateways;

class PaymentGateways 
{
    public function __construct()
    {
        
    }

    public function zarinpal()
    {
       return new ZarinPalGateway;
    }

    public function NextPay()
    {
       return new NextPayGateway;
    }

    public function meli() 
    {
       return new MelliGateway;
    }
}







