<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Socialite;
use App\SocialAccountService;


class SocialAuthController extends Controller
{
    //
     public function redirect()
    {
        return Socialite::driver('google')->redirect();   
    }   

    public function callback(SocialAccountService $service)

    {
    /*	$userData = Socialite::driver('google')->user();
    	*/
        $user = $service->createOrGetUser(Socialite::driver('google')->user());
       /* return response()->json($user);*/
        auth()->login($user);

        return redirect()->to('/home');
    }
}
