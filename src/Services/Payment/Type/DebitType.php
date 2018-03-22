<?php

namespace App\Services\Payment\Type;

use App\Services\Payment\Payment;

class DebitType extends PaymentType
{
    public function getPaymentProcessTime(Payment $payment)
    {
        return 2;
    }
}