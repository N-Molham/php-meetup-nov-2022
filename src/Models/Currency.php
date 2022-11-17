<?php

namespace App\Models;

use App\Contracts\CurrencyContract;

class Currency implements CurrencyContract
{
    public function __construct(protected string $name, protected string $code)
    {
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
}
