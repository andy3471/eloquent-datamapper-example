<?php

namespace App\Facades;

use App\Contracts\UserContract;
use Illuminate\Support\Facades\Facade;

class User extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return UserContract::class;
    }
}
