<?php

namespace App\Contracts;

interface SiteRepositoryFactoryContract
{
    public function getRepository() : SiteRepositoryContract;

    public static function getInstance();
}
