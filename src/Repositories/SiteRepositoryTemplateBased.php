<?php

namespace App\Repositories;

use App\Adapters\StoreAdapter;
use App\Contracts\StoreAdapterContract;

/**
 * Repository: an architectural layer that handles communication between the application and data source.
 *
 * @link https://www.developer.com/design/the-repository-pattern-in-php/
 */
class SiteRepositoryTemplateBased extends AbstractSiteRepository
{
    protected function getStoreAdapter(array $data) : StoreAdapterContract
    {
        return new StoreAdapter($data);
    }
}
