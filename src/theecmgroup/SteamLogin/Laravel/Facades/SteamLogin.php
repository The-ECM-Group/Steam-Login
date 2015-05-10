<?php

namespace theecmgroup\SteamLogin\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class SteamLogin extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'steamlogin';
    }

}
