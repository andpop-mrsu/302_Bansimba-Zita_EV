<?php

namespace elie\Task06_1;

//use Rodushkinve\Task06_1\PaymentAdapterInterface;
//use Rodushkinve\Task06_1\CreditCard;

class CreditCardAdapter implements PaymentAdapterInterface
{
    private $adaptee;

    public function __construct(CreditCard $adaptee)
    {
        $this -> adaptee = $adaptee;
    }

    public function collectMoney($amount)
    {
        return $this -> adaptee -> authorizeTransaction();
    }
}