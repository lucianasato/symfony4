<?php

namespace App\Services\Payment;

class PaymentFactory
{
    public function getPaymentType($paymentType)
    {
        $className = sprintf( "App\\Services\\Payment\\Type\\%sType", ucfirst($paymentType));

        if (!class_exists($className)) {
            throw new \RuntimeException('Type not found');
        }

        return new $className;
    }
}