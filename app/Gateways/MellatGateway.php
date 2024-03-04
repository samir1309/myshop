<?php

namespace App\Gateways;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;


class MellatGateway implements PaymentGateway
{
    protected $terminalId;
    protected $username;
    protected $password;

    public function __construct($terminalId, $username, $password)
    {
        $this->terminalId = $terminalId;
        $this->username = $username;
        $this->password = $password;
    }

    public function purchase(Payment $payment)
    {
        // اتصال به سرور بانک ملت و انجام عملیات پرداخت

        // استفاده از مستندات بانک ملت برای ارسال درخواست و دریافت پاسخ

        // کد اتصال به بانک ملت
    }

    public function verify(Payment $payment)
    {
        // اتصال به سرور بانک ملت و انجام عملیات تایید پرداخت

        // استفاده از مستندات بانک ملت برای ارسال درخواست تایید و دریافت پاسخ

        // کد اتصال به بانک ملت
    }

   
}