<?php

namespace Ifpb\CreditCard;

use DateTimeInterface;
use Ifpb\Constants\CardType;

class VisaPurchase extends CreditCardPurchase
{
    private int $type;

    public function __construct(string $cardNumber, float $value, DateTimeInterface $date, int $type)
    {
        parent::__construct($cardNumber, $value, $date);
        $this->type = $type;
    }
}
