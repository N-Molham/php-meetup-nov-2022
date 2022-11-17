<?php

namespace App\Contracts;

interface StoreContract
{
    public function getLocation() : string;

    public function getCurrency() : CurrencyContract;

    public function getTax() : string;
}
