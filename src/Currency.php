<?php

namespace Manhattan;

class Currency
{
    private int $isoCode;


    public function __construct(int $isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getIsoCode(): int
    {
        return $this->isoCode;
    }

    private function setIsoCode(int $isoCode):void
    {
        $code =[840,978];
        if (!in_array($isoCode,$code)){
            throw new \Exception("error code");
        }
        $this->isoCode = $isoCode;
    }


}
$usd =new Currency(840);
var_dump($usd);

