<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User;

class LoginController extends Controller
{
    public function redirect_social($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function callback_social($provider){
        try {
            $user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect()->route('home');
        }
        $existingUser = User::where('email', $user->getEmail())->first();
        if ($existingUser) {
                auth()->login($existingUser, true);
        } else {
                $newUser = new User;
                $newUser->provider_name = 'google';
                $newUser->provider_id = $user->getId();
                $newUser->email = $user->getEmail();
                $newUser->name = $user->getName();
                $newUser->CMND = null;
                $newUser->phoneNumber = null;
                $newUser->password = "";
                $newUser->customerType = 1;
                $newUser->avatar = $user->getAvatar();
                $newUser->email_verified_at = now();
                $newUser->save();
                auth()->login($newUser, true);
        }
        return redirect()->route('home');
    }
}
