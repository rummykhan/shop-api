<?php

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

//Route::get('/', 'HomeController@index');
Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::group(['middleware' => 'auth', 'prefix' => 'user'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/api-tokens', 'ApiTokenController@index')->name('api-token');
    Route::post('/api-tokens', 'ApiTokenController@createApiToken')->name('generate-api-token');

    Route::get('/endpoints', 'EndpointController')->name('endpoints');
});


Route::get('/sample/category', 'SampleController@category')->name('category-sample');
Route::get('/sample/item', 'SampleController@item')->name('item-sample');

require __DIR__ . '/auth.php';
