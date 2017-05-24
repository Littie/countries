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
], function () {
    Route::get('cities', ['uses' => 'CitiesController@index', 'as' => '.index']);
    Route::get('countries/{country}/cities/create', ['uses' => 'CitiesController@create', 'as' => '.create']);
    Route::post('countries/{country}/cities', ['uses' => 'CitiesController@store', 'as' => '.store']);
    Route::get('countries/{country}/cities/{city}/edit', ['uses' => 'CitiesController@edit', 'as' => '.edit']);
    Route::put('countries/{country?}/cities/{city}', ['uses' => 'CitiesController@update', 'as' => '.update']);
    Route::delete('{city}', ['uses' => 'CitiesController@destroy', 'as' => '.destroy']);
    Route::get('countries/{country}/cities/{city}', ['uses' => 'CitiesController@show', 'as' => '.show']);
});

Route::group([
    'as'     => 'languages',
    'prefix' => 'languages',
], function () {
    Route::get('/', ['uses' => 'LanguagesController@index', 'as' => '.index']);
    Route::get('create', ['uses' => 'LanguagesController@create', 'as' => '.create']);
    Route::post('/', ['uses' => 'LanguagesController@store', 'as' => '.store']);
    Route::get('{language}/edit', ['uses' => 'LanguagesController@edit', 'as' => '.edit']);
    Route::put('{language}', ['uses' => 'LanguagesController@update', 'as' => '.update']);
    Route::delete('{language}', ['uses' => 'LanguagesController@destroy', 'as' => '.destroy']);
});