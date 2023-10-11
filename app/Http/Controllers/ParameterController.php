<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ParameterController extends Controller
{
    public function index(){
        return Inertia::render('Parameters', [
            'auth' => [
                'user' => Auth::user(),
                'type' => Auth::user()->type,
            ],
        ]);
    }
}
