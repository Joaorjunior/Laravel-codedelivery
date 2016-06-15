<?php
/**
 * Created by PhpStorm.
 * User: aline
 * Date: 08/06/2016
 * Time: 11:41
 */

namespace CodeDelivery\OAuth2;

use Illuminate\Support\Facades\Auth;

class PasswordVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
          'email' => $username,
          'password' => $password,
        ];

        if (Auth::once($credentials))
        {
            return Auth::user()->id;
        }

        return false;
    }

}