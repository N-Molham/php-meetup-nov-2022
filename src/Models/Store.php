<?php

namespace App\Models;

use App\Contracts\CurrencyContract;
use App\Contracts\StoreContract;

/**
 * Model: contains only the pure application data, it contains no logic describing how to present the data to a user.
 *
 * @link https://www.geeksforgeeks.org/mvc-design-pattern/
 */
class Store implements StoreContract
{
    public function __construct(
        protected string $country,
        protected CurrencyContract $currency,
        protected string $tax
    ) {
    }

    public function getLocation() : string
    {
        return $this->country;
    }

    public function getCurrency() : CurrencyContract
    {
        return $this->currency;
    }

    public function getTax() : string
    {
        return $this->tax;
    }
}
