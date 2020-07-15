<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response, File;
use Socialite;
use App\User;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $user_fb = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('status', 'Something went wrong or You have rejected the app!');
        }


        if ($user_fb->email == null) return redirect('/login');

        $user = $this->createUser($user_fb, $provider);

        auth()->login($user);
        return redirect()->to('/home');
    }

    function createUser($getInfo, $provider)
    {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'name' => $getInfo->name,
                'email' => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }
}
