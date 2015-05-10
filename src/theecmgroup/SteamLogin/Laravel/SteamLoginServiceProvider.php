<?php

namespace theecmgroup\SteamLogin\Laravel;

use Illuminate\Support\ServiceProvider;

class SteamLoginServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('theecmgroup\SteamLogin\SteamLogin', function($app) {
            return new theecmgroup\SteamLogin\SteamLogin();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return array('theecmgroup\SteamLogin\SteamLogin');
    }

}
