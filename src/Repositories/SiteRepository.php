<?php

namespace App\Repositories;

use App\Contracts\SiteRepositoryContract;
use App\Models\Store;
use App\Traits\IsSingletonTrait;

/**
 * Repository: an architectural layer that handles communication between the application and data source.
 *
 * @link https://www.developer.com/design/the-repository-pattern-in-php/
 */
class SiteRepository implements SiteRepositoryContract
{
    use IsSingletonTrait;

    public function name() : string
    {
        return $_ENV['APP_NAME'] ?? '';
    }

    public function store() : Store
    {
        return new Store($_ENV['STORE_LOCATION'] ?? '', $_ENV['STORE_CURRENCY'] ?? '');
    }
}
