<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Requests;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirect($social){
        return Socialite::driver($social)->redirect();
    }

    public function callback($social){
        $user = Socialite::driver($social)->user();
        $token = $user->token;
        $userInfo = [
          
           
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'avatar' => $user->getAvatar(),
            
        ];
        Auth::login(User::firstOrCreate($userInfo));
        return redirect('/home');

        
        
    }
}
