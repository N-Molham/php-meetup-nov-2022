<?php

use App\Repositories\SiteRepository;
use Dotenv\Dotenv;

require_once 'vendor/autoload.php';

// @link https://refactoring.guru/design-patterns

// https://github.com/vlucas/phpdotenv
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * 1. Repository & Decorator
 * 2. Factory
 * 3. Adapter & Model
 */

$siteRepository = \App\Factories\SiteRepositoryFactory::getInstance()->getRepository();

var_dump($siteRepository->name());
var_dump($siteRepository->store()->getCurrency());
var_dump($siteRepository->store()->getLocation());
var_dump($siteRepository->store()->getTax());
