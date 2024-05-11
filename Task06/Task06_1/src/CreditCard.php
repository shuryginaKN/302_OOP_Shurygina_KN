<?php

namespace App;

class CreditCard
{
    private $cardNumber;
    private $expirationDate;

    public function __construct($cardNumber, $expirationDate)
    {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
    }

    public function transfer($amount)
    {
        return "Authorization code: 777";
    }
}
