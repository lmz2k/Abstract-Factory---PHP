<?php

namespace Ifpb\Factory;

use DateTimeImmutable;
use Ifpb\CreditCard\CreditCardPurchase;
use Ifpb\CreditCard\VisaPurchase;
use Ifpb\Fee\Fee;
use Ifpb\Fee\ICMSFee;

class VisaPurchaseFactory implements PurchaseFactory
{

    private string $cardNumber;
    private float $value;
    private int $type;

    public function __construct(string $cardNumber, float $value, int $type)
    {
        $this->cardNumber = $cardNumber;
        $this->value = $value;
        $this->type = $type;
    }

    public function createPurchase(): CreditCardPurchase
    {
        return new VisaPurchase(
            $this->cardNumber,
            $this->value,
            new DateTimeImmutable(),
            $this->type
        );
    }

    public function fee(): Fee
    {
        return new ICMSFee();
    }
}
