<?php

namespace App\Adapters;

use App\Contracts\CurrencyAdapterContract;
use App\Contracts\CurrencyContract;
use App\Models\Currency;

/**
 * Allows objects with incompatible interfaces to collaborate.
 *
 * @link https://refactoring.guru/design-patterns/adapter
 */
class CurrencyAdapter implements CurrencyAdapterContract
{
    public function __construct(protected array $data)
    {
    }

    public function convertFromSource() : CurrencyContract
    {
        return new Currency($this->data['STORE_CURRENCY_NAME'] ?? '', $this->data['STORE_CURRENCY_CODE'] ?? '');
    }

    public function convertToSource(CurrencyContract $currency) : array
    {
        return [
            'STORE_CURRENCY_NAME' => $currency->getName(),
            'STORE_CURRENCY_CODE' => $currency->getCode(),
        ];
    }
}
