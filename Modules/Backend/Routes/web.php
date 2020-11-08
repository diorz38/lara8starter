<?php

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

Route::prefix('backend')->group(function () {
    Route::get('/dashboard', 'BackendController@index')->name('backend.dashboard');

    // Route::get('/form-elements', 'BackendController@formElements')->name('backend.form-elements');
    // Route::get('/form-elements', 'BackendController@docs')->name('backend.docs');

    Route::group([
        'prefix' => 'pages',
    ], function () {
        Route::get('/form-elements', 'BackendController@formElements')->name('pages.form-elements');
        Route::get('/docs', 'BackendController@docs')->name('pages.docs');
    });

    Route::group([
        'prefix' => 'users',
    ], function () {
        Route::get('/', 'UsersController@index')
            ->name('users.user.index');
        Route::get('/create', 'UsersController@create')
            ->name('users.user.create');
        Route::get('/show/{user}', 'UsersController@show')
            ->name('users.user.show');
        Route::get('/{user}/edit', 'UsersController@edit')
            ->name('users.user.edit');
        Route::post('/', 'UsersController@store')
            ->name('users.user.store');
        Route::put('user/{user}', 'UsersController@update')
            ->name('users.user.update');
        Route::delete('/user/{user}', 'UsersController@destroy')
            ->name('users.user.destroy');
        Route::get('basic', 'UsersController@basicLaratableData')->name('users_laratable');
    });

});
