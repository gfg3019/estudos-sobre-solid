<?php
interface PaymentInterface
{
    public function pay();
}

class Paypal implements PaymentInterface
{
    public function pay()
    {
        return 'pay with paypal';
    }
}

class Pagseguro implements PaymentInterface
{
    public function pay()
    {
        return 'pay with pagseguro';
    }
}

class Payment
{
    public function pay(PaymentInterface $payment)
    {
        var_dump($payment->pay());
    }
}

$payment = new Payment();

$payment->pay(new Pagseguro());