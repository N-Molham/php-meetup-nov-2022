<?php

namespace App\Repositories;

use App\Contracts\SiteRepositoryContract;
use App\Contracts\StoreAdapterContract;
use App\Models\Store;
use App\Traits\IsSingletonTrait;

/**
 * A behavioral design pattern that allows you to define a skeleton of an algorithm in a base class and let subclasses override the steps without changing the overall algorithm’s structure.
 *
 * @link https://refactoring.guru/design-patterns/template-method/php/example#lang-features
 */
abstract class AbstractSiteRepository implements SiteRepositoryContract
{
    use IsSingletonTrait;

    public function name() : string
    {
        return $_ENV['APP_NAME'] ?? '';
    }

    public function store() : Store
    {
        return $this->getStoreAdapter($_ENV)->convertFromSource();
    }

    abstract protected function getStoreAdapter(array $data) : StoreAdapterContract;
}
