<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;

class LoginFBController extends Controller
{
    public function redirectToProvider()
        {
            return Socialite::driver('facebook')->redirect();   
        }   

        public function handleProviderCallback($provider)
        {
            $user = Socialite::driver($provider)->user(); 
            dd($user); 
            // try {
            //     $user = Socialite::driver($provider)->user();
            // } catch (\Exception $e) {
            //     return redirect()->route('home');
            // }
            // $existingUser = User::where('email', $user->getEmail())->first();
            // if ($existingUser) {
            //         auth()->login($existingUser, true);
            // } else {
            //         $newUser = new User;
            //         $newUser->provider_name = 'google';
            //         $newUser->provider_id = $user->getId();
            //         $newUser->email = $user->getEmail();
            //         $newUser->name = $user->getName();
            //         $newUser->CMND = null;
            //         $newUser->phoneNumber = null;
            //         $newUser->password = "";
            //         $newUser->customerType = 1;
            //         $newUser->avatar = $user->getAvatar();
            //         $newUser->email_verified_at = now();
            //         $newUser->save();
            //         auth()->login($newUser, true);
            // }
            // return redirect()->route('home');
        }
}
