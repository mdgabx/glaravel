<?php

namespace App;

class PaymentService
{
    public function process(): bool
    {
        echo 'paid' . PHP_EOL;

        return true;
    }
}