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

Route::group([
    'as' => 'countries',
    'prefix' => 'countries',
], function () {
    Route::get('/', ['uses' => 'CountriesController@index', 'as' => '.index']);
    Route::get('create', ['uses' => 'CountriesController@create', 'as' => '.create']);
    Route::post('/', ['uses' => 'CountriesController@store', 'as' => '.store']);
    Route::get('{country}/edit', ['uses' => 'CountriesController@edit', 'as' => '.edit']);
    Route::put('{country}', ['uses' => 'CountriesController@update', 'as' => '.update']);
    Route::delete('{country}', ['uses' => 'CountriesController@destroy', 'as' => '.destroy']);
    Route::get('{country}', ['uses' => 'CountriesController@show', 'as' => '.show']);
});

Route::group([
    'as' => 'cities',
    'prefix' => 'cities',
], function () {
    Route::get('/', ['uses' => 'CitiesController@index', 'as' => '.index']);
    Route::get('create', ['uses' => 'CitiesController@create', 'as' => '.create']);
    Route::post('/', ['uses' => 'CitiesController@store', 'as' => '.store']);
    Route::get('{city}/edit', ['uses' => 'CitiesController@edit', 'as' => '.edit']);
    Route::put('{city}', ['uses' => 'CitiesController@update', 'as' => '.update']);
    Route::delete('{city}', ['uses' => 'CitiesController@destroy', 'as' => '.destroy']);
    Route::get('{city}', ['uses' => 'CitiesController@show', 'as' => '.show']);
});
