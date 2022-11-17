<?php

namespace App\Contracts;

interface CurrencyAdapterContract
{
    public function convertFromSource() : CurrencyContract;

    public function convertToSource(CurrencyContract $currency) : array;
}
