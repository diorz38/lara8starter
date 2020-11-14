<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group([
//     'prefix' => 'calon_pemilihs',
// ], function () {
//     Route::get('/', 'Api\CalonPemilihsController@index')
//         ->name('api.calon_pemilihs.calon_pemilih.index');
//     Route::get('/show/{calonPemilih}','Api\CalonPemilihsController@show')
//         ->name('api.calon_pemilihs.calon_pemilih.show')->where('id', '[0-9]+');
//     Route::post('/', 'Api\CalonPemilihsController@store')
//         ->name('api.calon_pemilihs.calon_pemilih.store');
//     Route::put('calon_pemilih/{calonPemilih}', 'Api\CalonPemilihsController@update')
//         ->name('api.calon_pemilihs.calon_pemilih.update')->where('id', '[0-9]+');
//     Route::delete('/calon_pemilih/{calonPemilih}','Api\CalonPemilihsController@destroy')
//         ->name('api.calon_pemilihs.calon_pemilih.destroy')->where('id', '[0-9]+');
// });
