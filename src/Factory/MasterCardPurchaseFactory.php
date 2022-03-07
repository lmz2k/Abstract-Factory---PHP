<?php

namespace Ifpb\Factory;

use DateTimeImmutable;
use Ifpb\Constants\Banks;
use Ifpb\CreditCard\CreditCardPurchase;
use Ifpb\CreditCard\MasterCardPurchase;
use Ifpb\Fee\CustomFee;
use Ifpb\Fee\Fee;

class MasterCardPurchaseFactory implements PurchaseFactory
{

    private string $cardNumber;
    private float $value;
    private int $bank;

    public function __construct(string $cardNumber, float $value, int $bank)
    {
        $this->cardNumber = $cardNumber;
        $this->value = $value;
        $this->bank = $bank;
    }

    public function createPurchase(): CreditCardPurchase
    {
        return new MasterCardPurchase(
            $this->cardNumber,
            $this->value,
            new DateTimeImmutable(),
            $this->bank
        );
    }

    public function fee(): Fee
    {
        return new CustomFee();
    }
}
