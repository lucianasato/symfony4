<?php

namespace App\Services\Payment\Type;

use App\Services\Payment\Payment;

abstract class PaymentType
{
    abstract public function getPaymentProcessTime(Payment $payment);
}