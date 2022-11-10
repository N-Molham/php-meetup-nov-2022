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

$siteRepository = new SiteRepository();

var_dump($siteRepository->name());
var_dump($siteRepository->store());
