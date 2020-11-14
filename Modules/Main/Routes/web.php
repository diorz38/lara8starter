<?php

use Modules\Main\Http\Controllers\CalonPemilihsController;
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

Route::prefix('main')->group(function() {
    Route::get('/', 'MainController@index')->name('home');
    Route::get('/livewire/pemilih', 'CalonPemilihsController@livewire')->name('main_livewire_pemilih');

    Route::group([
        'prefix' => 'calon_pemilih',
    ], function () {
        Route::get('/', [CalonPemilihsController::class,'index'])
            ->name('calon_pemilihs.calon_pemilih.index');
        Route::get('/create',[CalonPemilihsController::class,'create'])
            ->name('calon_pemilihs.calon_pemilih.create');
        Route::get('/show/{calonPemilih}',[CalonPemilihsController::class,'show'])
            ->name('calon_pemilihs.calon_pemilih.show')->where('id', '[0-9]+');
        Route::get('/{calonPemilih}/edit',[CalonPemilihsController::class,'edit'])
            ->name('calon_pemilihs.calon_pemilih.edit')->where('id', '[0-9]+');
        Route::post('/', [CalonPemilihsController::class,'store'])
            ->name('calon_pemilihs.calon_pemilih.store');
        Route::put('calon_pemilih/{calonPemilih}', [CalonPemilihsController::class,'update'])
            ->name('calon_pemilihs.calon_pemilih.update')->where('id', '[0-9]+');
        Route::delete('/calon_pemilih/{calonPemilih}',[CalonPemilihsController::class,'destroy'])
            ->name('calon_pemilihs.calon_pemilih.destroy')->where('id', '[0-9]+');
    });

});
