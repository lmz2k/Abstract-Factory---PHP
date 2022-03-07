<?php


use Ifpb\Constants\CardType;
use Ifpb\Factory\MasterCardPurchaseFactory;
use Ifpb\Factory\VisaPurchaseFactory;

require 'vendor/autoload.php';

//$factory = new MasterCardPurchaseFactory('0000', 100.00, 1);
$factory = new VisaPurchaseFactory('0000', 100.00, 1);

$purchase = $factory->createPurchase();
$fee = $factory->fee();

var_dump($purchase, $fee);
