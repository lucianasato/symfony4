<?php

namespace App\Services\Payment\Type;

use App\Services\Payment\Payment;

class CreditType extends PaymentType
{
    public function getPaymentProcessTime(Payment $payment)
    {
        return 1;
    }
}