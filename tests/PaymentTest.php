<?php

namespace App\Tests;

use App\Services\Payment\Payment;
use App\Services\Payment\PaymentFactory;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    public function testCreditCardPaymentTypeSuccess()
    {
        $payment = new Payment(new PaymentFactory());
        $payment->setType('credit');

        $this->assertEquals(1, $payment->getPaymentProcessTime());
    }

    public function testDebitPaymentTypeSuccess()
    {
        $payment = new Payment(new PaymentFactory());
        $payment->setType('debit');

        $this->assertEquals(2, $payment->getPaymentProcessTime());
    }

    public function testCashPaymentTypeSuccess()
    {
        $payment = new Payment(new PaymentFactory());
        $payment->setType('cash');

        $this->assertEquals(0, $payment->getPaymentProcessTime());
    }

    public function testTransferPaymentTypeSuccess()
    {
        $payment = new Payment(new PaymentFactory());
        $payment->setType('transfer');

        $this->assertEquals(3, $payment->getPaymentProcessTime());
    }
}