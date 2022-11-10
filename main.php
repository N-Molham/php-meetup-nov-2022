<?php

use App\Factories\SiteRepositoryFactory;
use App\Repositories\SiteRepository;
use Dotenv\Dotenv;

require_once 'vendor/autoload.php';

// @link https://refactoring.guru/design-patterns

// https://github.com/vlucas/phpdotenv
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * 1. Repository & Decorator
 * 2. Adapter & Model
 * 3. Factory
 */

$siteRepository = new SiteRepository();

//$siteRepository = SiteRepositoryFactory::getRepository();

dump($siteRepository->name());
dump($siteRepository->store());
