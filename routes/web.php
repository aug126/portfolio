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

Route::get('/', 'MainController@index');
Route::redirect('/portfolio', '/');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::redirect('/admin', '/dashboard');

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('/admin/about', 'AdminAboutController');
    Route::resource('/admin/projet', 'AdminPortfolioController');
    Route::resource('/admin/networks', 'AdminNetworksController');
});