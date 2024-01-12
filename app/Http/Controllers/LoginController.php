<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;  
use Socialite;

class LoginController extends Controller
{


    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);
        return redirect()->route('home');

    }
    
    // public function redirectToGithub(){
    //     return Socialite::driver('github')->redirect();
    // }
    // public function handleGithubCallback(){
    //     $user = Socialite::driver('github')->user();

    //     $this->_registerOrLoginUser($user);
    //     return redirect()->route('home');
    // }

    protected function _registerOrLoginUser($data){
        $user = User::where('email', '=', $data->email)->first();
        if(!$user){
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }
        Auth::login($user);
    }

}
