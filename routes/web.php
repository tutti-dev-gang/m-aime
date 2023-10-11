<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Http\Controllers\{
    ParameterController,
    UserController,
    ProfileController,
};

use App\Http\Controllers\Parameters\{
    InterestController,
};

use App\Http\Controllers\Auth\{
    DiscordController,
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome');
});


Route::get('/posts', function () {
    return Inertia::render('Posts/PostComponent');
});

Route::get('/parameters/interests', [InterestController::class, 'index'])->name('interests.index');


// Route::prefix('interests')
//     ->controller("InterestController")
//     ->name('interests.')
//     ->middleware('auth')
//     ->group(function () {
//     Route::get('/', 'index')->name('index');
//     Route::get('/create', 'create')->name('create');
//     Route::post('/', 'store')->name('store');
//     Route::get('/{interest}/edit', 'edit')->name('edit');
//     Route::patch('/{interest}', 'update')->name('update');
//     Route::delete('/{interest}', 'destroy')->name('destroy');
// });


Route::prefix('parameters')
    ->middleware('auth')
    ->group(function () {
    Route::get('/', [ParameterController::class, 'index'])->name('parameters');
});





Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'auth' => [
            'user' => Auth::user(),
            'type' => Auth::user()->type,
        ],
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
});

Route::get('/oauth/callback/discord', [DiscordController::class, 'handleProviderCallback']);

require __DIR__.'/auth.php';
