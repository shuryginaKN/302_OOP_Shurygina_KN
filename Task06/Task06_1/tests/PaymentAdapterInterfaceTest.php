<?php

namespace App\Tests;

use App\PaymentAdapterInterface;
use PHPUnit\Framework\TestCase;
use App\CreditCard;
use App\CreditCardAdapter;
use App\PayPal;
use App\PayPalAdapter;

class PaymentAdapterInterfaceTest extends TestCase
{
    public function testPayPalAdapter()
    {
        $paypal = new PayPal('customer@aol.com', 'password');
        $paypalAdapter = new PayPalAdapter($paypal);
        $this->assertSame("PayPal Success!", $paypal->authorizeTransaction(100));
        $this->assertTrue($paypalAdapter->collectMoney(100));
    }

    public function testCreditCardAdapter()
    {
        $cc = new CreditCard(1234567890123456, "09/22");
        $ccAdapter = new CreditCardAdapter($cc);
        $this->assertSame("Authorization code: 777", $cc->transfer(200));
        $this->assertTrue($ccAdapter->collectMoney(200));
    }
}
