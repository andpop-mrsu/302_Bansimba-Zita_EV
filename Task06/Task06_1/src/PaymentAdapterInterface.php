<?php

namespace elie\Task06_1;

interface PaymentAdapterInterface
{
    public function collectMoney($amount);
}