<?php

namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\{
    Admin,
};


class DiscordController extends Controller
{
    public function redirectToProvider(){
        return Socialite::driver('discord')->redirect();
    }

    /**
    * Obtain the user information from Discord.
    *
    * @return \Illuminate\Http\Response
    */
    public function handleProviderCallback(){
        try{
            $discord_user = Socialite::driver('discord')->stateless()->user();
            $user = Admin::where("discord_id", $discord_user->id)->first();
            Auth::login($user);
            return redirect()->route('dashboard');
        } catch (\Exception $e){
            return redirect()->route('login');
        }
    }
}
