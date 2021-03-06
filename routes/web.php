<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
// Web Routes
Route::group(['namespace' => 'Web', 'middleware' => 'web'], function () {
  Route::get('/', 'MasterController@index')->name('index');
  Route::get('contact', 'MasterController@contact')->name('contact');

  // About
  Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
    Route::get('about', 'AboutController@about')->name('about');
    Route::get('team', 'AboutController@team')->name('team');
  });

  // Legal
  Route::group(['prefix' => 'legal', 'as' => 'legal.'], function () {
    Route::get('terms', 'LegalController@terms')->name('terms');
    Route::get('privacy', 'LegalController@privacy')->name('privacy');
    Route::get('cookie', 'LegalController@cookie')->name('cookie');
  });
});

// Authentication Routes
Auth::routes(['verify' => true]);
Route::get('auth/{provider}', 'Auth\OAuthController@redirectToProvider')->where('provider', 'google|facebook');
Route::get('auth/{provider}/callback', 'Auth\OAuthController@handleProviderCallback')->where('provider', 'google|facebook');

// Dashboard Routes
Route::group(['namespace' => 'Dashboard', 'middleware' => ['auth','verified']], function () {
  // Admin Routes
  Route::group(['namespace' => 'Admin', 'middleware' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    // Dashboard
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
  });

  // User Routes
  Route::group(['namespace' => 'User', 'middleware' => 'user', 'as' => 'user.'], function () {
    // Home
    Route::get('home', 'HomeController@index')->name('home');
  });
});