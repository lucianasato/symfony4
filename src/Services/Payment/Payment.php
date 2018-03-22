<?php

namespace App\Services\Payment;

class Payment
{
    protected $type;

    private $factory;

    protected $types = [
        'credit' => 'credit',
        'debit' => 'debit',
        'cash' => 'cash',
        'transfer' => 'transfer',
    ];

    public function __construct(PaymentFactory $paymentFactory)
    {
        $this->factory = $paymentFactory;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getPaymentProcessTime()
    {
        $paymentType = $this->factory->getPaymentType($this->type);
        return $paymentType->getPaymentProcessTime($this);
    }
}