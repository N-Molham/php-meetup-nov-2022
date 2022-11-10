<?php

namespace App\Contracts;

interface SiteRepositoryFactoryContract
{
    public static function getRepository() : SiteRepositoryContract;

    public static function getInstance();
}
