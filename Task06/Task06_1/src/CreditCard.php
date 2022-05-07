<?php

namespace elie\Task06_1;

class CreditCard
{
    private $cardNumber;
    private $validity;

    public function __construct(string $cardNumber, string $validity)
    {
        $this -> cardNumber = $cardNumber;
        $this -> validity = $validity;
    }

    public function authorizeTransaction()
    {
        return "Authorization code:";
    }
}