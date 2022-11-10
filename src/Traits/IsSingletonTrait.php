<?php

namespace App\Traits;

/**
 * A trait for singletons.
 *
 * Lets you ensure that a class has only one instance,
 * while providing a global access point to this instance.
 *
 * @link https://refactoring.guru/design-patterns/singleton
 */
trait IsSingletonTrait
{
    /** @var static holds the current singleton instance */
    protected static $instance;

    /**
     * Determines if the current instance is loaded.
     *
     * @return bool
     */
    public static function isLoaded() : bool
    {
        return (bool) static::$instance;
    }

    /**
     * Gets the singleton instance.
     *
     * @return static
     */
    public static function getInstance() : static
    {
        if (! static::isLoaded()) {
            static::$instance = new self();
        }

        return static::$instance;
    }

    /**
     * Resets the singleton instance.
     *
     * @return void
     */
    public static function reset() : void
    {
        static::$instance = null;
    }
}
