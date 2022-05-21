<?php

namespace elie\Task06_1;

class PayPal
{
    private $login;
    private $password;

    public function __construct(string $login, string $password)
    {
        $this -> login = $login;
        $this -> password = $password;
    }

    public function transfer()
    {
        return "PayPal Success!";
    }
}