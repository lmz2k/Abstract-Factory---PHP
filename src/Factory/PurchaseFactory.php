<?php

namespace Ifpb\Factory;

use Ifpb\CreditCard\CreditCardPurchase;
use Ifpb\Fee\Fee;

interface PurchaseFactory
{
    public function createPurchase() : CreditCardPurchase;

    public function fee(): Fee;
}
