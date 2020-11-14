<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UsersController;
use App\Http\Controllers\CalonPemilihsController;
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

Route::get('/livewire/pemilih',function () {
    return view('livewire.home');
})->middleware(['auth'])->name('livewire_pemilih');

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

// Route::group([
//     'prefix' => 'calon_pemilihs',
// ], function () {
//     Route::get('/', [CalonPemilihsController::class,'index'])
//         ->name('calon_pemilihs.calon_pemilih.index');
//     Route::get('/create',[CalonPemilihsController::class,'create'])
//         ->name('calon_pemilihs.calon_pemilih.create');
//     Route::get('/show/{calonPemilih}',[CalonPemilihsController::class,'show'])
//         ->name('calon_pemilihs.calon_pemilih.show')->where('id', '[0-9]+');
//     Route::get('/{calonPemilih}/edit',[CalonPemilihsController::class,'edit'])
//         ->name('calon_pemilihs.calon_pemilih.edit')->where('id', '[0-9]+');
//     Route::post('/', [CalonPemilihsController::class,'store'])
//         ->name('calon_pemilihs.calon_pemilih.store');
//     Route::put('calon_pemilih/{calonPemilih}', [CalonPemilihsController::class,'update'])
//         ->name('calon_pemilihs.calon_pemilih.update')->where('id', '[0-9]+');
//     Route::delete('/calon_pemilih/{calonPemilih}',[CalonPemilihsController::class,'destroy'])
//         ->name('calon_pemilihs.calon_pemilih.destroy')->where('id', '[0-9]+');
// });
