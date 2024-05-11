<?php

namespace App;

class PayPal
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function authorizeTransaction($amount)
    {
        return "PayPal Success!";
    }
}
