<?php

namespace App\Contracts;

/**
 * Decorator: a structural pattern that allows adding new behaviors to objects dynamically by placing them inside special wrapper objects, called decorators.
 *
 * @link https://refactoring.guru/design-patterns/decorator/php/example#lang-features
 */
interface SiteRepositoryContract
{
    public function name() : string;

    public function store() : StoreContract;
}
