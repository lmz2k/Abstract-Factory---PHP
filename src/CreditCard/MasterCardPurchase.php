<?php

namespace Ifpb\CreditCard;

use DateTimeInterface;
use Ifpb\Constants\Banks;

class MasterCardPurchase extends CreditCardPurchase
{
    private int $bank;

    public function __construct(string $cardNumber, float $value, DateTimeInterface $date, int $bank)
    {
        parent::__construct($cardNumber, $value, $date);
        $this->bank = $bank;
    }
}
