<?php

namespace elie\Task06_1;

//use Rodushkinve\Task06_1\PaymentAdapterInterface;
//use Rodushkinve\Task06_1\PayPal;

class PayPalAdapter implements PaymentAdapterInterface
{
    private $adaptee;

    public function __construct(PayPal $adaptee)
    {
        $this -> adaptee = $adaptee;
    }

    public function collectMoney($amount)
    {
        return $this -> adaptee -> transfer();
    }
}