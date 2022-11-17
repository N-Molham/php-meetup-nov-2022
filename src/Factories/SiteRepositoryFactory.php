<?php

namespace App\Factories;

use App\Contracts\SiteRepositoryContract;
use App\Contracts\SiteRepositoryFactoryContract;
use App\Traits\IsSingletonTrait;
use RuntimeException;

/**
 * Factory method is a creational design pattern which solves the problem of creating product objects without specifying their concrete classes.
 *
 * @link https://refactoring.guru/design-patterns/factory-method/php/example#lang-features
 */
class SiteRepositoryFactory implements SiteRepositoryFactoryContract
{
    use IsSingletonTrait;

    public function getRepository() : SiteRepositoryContract
    {
        $repositoryClass = $_ENV['SITE_REPOSITORY'] ?? null;

        if (! $repositoryClass ||
            ! class_exists($repositoryClass) ||
            ! in_array(SiteRepositoryContract::class, class_implements($repositoryClass, true), true)) {
            throw new RuntimeException('Site repository class is invalid');
        }

        return $repositoryClass::getInstance();
    }
}
