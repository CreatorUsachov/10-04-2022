<?php

require_once 'vendor/autoload.php';


$currency1 = new \Manhattan\Cur\Currency(\Manhattan\Enums\Code::EUR);
$currency2 = new \Manhattan\Cur\Currency(\Manhattan\Enums\Code::EUR);
$User1 = new \Manhattan\Mon\Money(30,$currency1);
$User2 = new \Manhattan\Mon\Money(30,$currency2);










