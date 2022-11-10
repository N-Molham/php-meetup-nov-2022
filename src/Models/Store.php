<?php

namespace App\Models;

use App\Contracts\StoreContract;

class Store implements StoreContract
{
    public function __construct(protected string $country, protected string $currency)
    {
    }

    public function getLocation() : string
    {
        return $this->country;
    }

    public function getCurrency() : string
    {
        return $this->currency;
    }
}
