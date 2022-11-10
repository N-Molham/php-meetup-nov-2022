<?php

namespace App\Contracts;

interface StoreAdapterContract
{
    public function convertFromSource() : StoreContract;

    public function convertToSource(StoreContract $store) : array;
}
