<?php

namespace nietocjr\LaravelKintoneConnect\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \nietocjr\LaravelKintoneConnect\LaravelKintoneConnect
 */
class LaravelKintoneConnect extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \nietocjr\LaravelKintoneConnect\LaravelKintoneConnect::class;
    }
}
