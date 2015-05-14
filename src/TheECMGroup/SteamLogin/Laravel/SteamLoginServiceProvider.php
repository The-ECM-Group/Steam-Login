<?php

namespace TheECMGroup\SteamLogin\Laravel;

use Illuminate\Support\ServiceProvider;

class SteamLoginServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('SteamLogin', function($app) {
            return new \TheECMGroup\SteamLogin\SteamLogin($app);
        });
    }
}
