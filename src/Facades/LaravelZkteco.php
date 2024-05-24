<?php

namespace MehediJaman\LaravelZkteco\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MehediJaman\LaravelZkteco\LaravelZkteco
 */
class LaravelZkteco extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MehediJaman\LaravelZkteco\LaravelZkteco::class;
    }
}
