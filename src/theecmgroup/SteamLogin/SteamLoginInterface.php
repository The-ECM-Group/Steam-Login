<?php

namespace theecmgroup\SteamLogin;

interface SteamLoginInterface {

    public function url($return);

    public function validate();
}
