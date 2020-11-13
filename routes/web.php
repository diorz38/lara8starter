<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UsersController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

// Route::group([
//     'prefix' => 'users',
// ], function () {
//     Route::get('/', [UsersController::class, 'index'])
//         ->name('users.user.index');
//     Route::get('/create', [UsersController::class, 'create'])
//         ->name('users.user.create');
//     Route::get('/show/{user}', [UsersController::class, 'show'])
//         ->name('users.user.show');
//     Route::get('/{user}/edit', [UsersController::class, 'edit'])
//         ->name('users.user.edit');
//     Route::post('/', [UsersController::class, 'store'])
//         ->name('users.user.store');
//     Route::put('user/{user}', [UsersController::class, 'update'])
//         ->name('users.user.update');
//     Route::delete('/user/{user}', [UsersController::class, 'destroy'])
//         ->name('users.user.destroy');
// });
