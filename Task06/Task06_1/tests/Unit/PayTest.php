<?php

namespace Rodushkinve\Tests;
use \PHPUnit\Framework\TestCase;
use Rodushkinve\Task06_1\PayPal;
use Rodushkinve\Task06_1\CreditCard;
use Rodushkinve\Task06_1\PayPalAdapter;
use Rodushkinve\Task06_1\CreditCardAdapter;

class PayTest extends TestCase
{
    public function testAdapters()
    {
        $paypal = new PayPal('customer@aol.com', 'password');
        $cc = new CreditCard(1234567890123456, "09/22");
        $paypalAdapter = new PayPalAdapter($paypal);
        $ccAdapter = new CreditCardAdapter($cc);
        $this -> assertSame("Authorization code:", $ccAdapter -> collectMoney(1340));
        $this -> assertSame("PayPal Success!", $paypalAdapter -> collectMoney(100));
    }
}