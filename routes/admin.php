<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'AuthAdmin\LoginController@login');
Route::post('logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
Route::post('password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('password/reset', 'AuthAdmin\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::middleware('auth:admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::resource('post', 'Admin\PostController', ['as' => 'admin']);
});