<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{

    public function main()
    {
        return \Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        dd(\Socialite::driver('github')->user());
    }
}
