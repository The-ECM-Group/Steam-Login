<?php

namespace TheECMGroup\SteamLogin;

interface SteamLoginInterface {

    public function url($return);

    public function validate();
}
