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

Route::get('/', 'UsersController@login')->name('root');

Auth::routes();
Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::get('/users', 'UsersController@showcheck')->name('users.showcheck');
Route::get('/login', 'UsersController@login')->name('users.login');
Route::patch('/login', 'UsersController@check')->name('users.check');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('/users/{user.stu_id}', 'UsersController@show')->name('users.show');