<?php

namespace App\Http\Controllers;

use App\Models\{
    User,
};
use App\Helpers\Utils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(){
        $users = User::all()->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'profile_description' => $user->profile_description,
                'location' => $user->location,
                'age' => Utils::getAge($user->birthday),
                'last_login' => Utils::getDateDiffForHumans($user->last_login),
                'interests_and_preferences' => $user->interests_and_preferences,
                'created_at' =>  Utils::getDateDiffForHumans($user->created_at),
                'updated_at' => $user->updated_at,
                'gender' => $user->gender->name
            ];
        });

        return Inertia::render('Users/Table', [
            'auth' => [
                'user' => Auth::user(),
                'type' => Auth::user()->type,
            ],
            'users' => $users,
        ]);
    }

    public function show(User $user){
        return Inertia::render('Users/Show', [
            'auth' => [
                'user' => Auth::user(),
                'type' => Auth::user()->type,
            ],
            'user' => $user
        ]);
    }

}
