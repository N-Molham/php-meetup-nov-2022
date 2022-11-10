<?php

namespace App\Adapters;

use App\Contracts\StoreAdapterContract;
use App\Contracts\StoreContract;
use App\Models\Store;

/**
 * Allows objects with incompatible interfaces to collaborate.
 *
 * @link https://refactoring.guru/design-patterns/adapter
 */
class StoreAdapter implements StoreAdapterContract
{
    public function __construct(protected array $data)
    {
    }

    public function convertFromSource() : StoreContract
    {
        return new Store($this->data['STORE_LOCATION'] ?? '', $this->data['STORE_CURRENCY'] ?? '');
    }

    public function convertToSource(StoreContract $store) : array
    {
        return [
            'STORE_LOCATION' => $store->getLocation(),
            'STORE_CURRENCY' => $store->getCurrency(),
        ];
    }
}
