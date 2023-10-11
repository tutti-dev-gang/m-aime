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

    public function getUserById($id) {
        $user = User::find($id);
        if (!$user) return response()->json(['error' => 'User not found'], 404);
        $user = [
            'id' => $user->id,
            'name' => $user->name,
            'photos' => $user->photos
        ];
        return response()->json($user);
    }
}
