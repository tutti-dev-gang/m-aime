<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Utils;
use App\Models\{
    User,
};

class UsersController extends Controller
{
    public function getAllUsers() {
         $users = User::all()->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'photos' => $user->photos
            ];
        });
        return response()->json($users);
    }
}
