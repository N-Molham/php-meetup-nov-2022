<?php

namespace App\Contracts;

/**
 * Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are implemented.
 *
 * @link https://www.php.net/manual/en/language.oop5.interfaces.php
 */
interface SiteRepositoryContract
{
    public function name() : string;

    public function store() : StoreContract;
}
