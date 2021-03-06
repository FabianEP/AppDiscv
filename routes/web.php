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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'PostController@index')->name('home');

Route::resource('security/users', 'Security\UserController');

Route::resource('security/roles', 'security\RoleController');

Route::resource('security/permissions', 'security\PermissionController');

Route::resource('posts', 'PostController');

#Route::get('/home', 'HomeController@index')->name('home');
