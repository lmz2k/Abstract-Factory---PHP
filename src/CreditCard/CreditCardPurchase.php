<?php

namespace Ifpb\CreditCard;

use DateTimeInterface;

abstract class CreditCardPurchase
{
    private string $cardNumber;
    private float $value;
    private DateTimeInterface $date;

    public function __construct(string $cardNumber, float $value, DateTimeInterface $date)
    {
        $this->cardNumber = $cardNumber;
        $this->value = $value;
        $this->date = $date;
    }
}
