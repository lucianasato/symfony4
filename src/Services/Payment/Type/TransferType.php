<?php

namespace App\Services\Payment\Type;

use App\Services\Payment\Payment;

class TransferType extends PaymentType
{
    public function getPaymentProcessTime(Payment $payment)
    {
        return 3;
    }
}