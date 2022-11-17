<?php

namespace App\Contracts;

interface CurrencyContract
{
    public function getName() : string;

    public function getCode() : string;
}
