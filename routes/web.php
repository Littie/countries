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
    return view('index');
});

/**
 * Routes for countries.
 */
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
    Route::get('{country}', ['uses' => 'CountriesController@show', 'as' => '.show'])->where('country', '[0-9]+');
});

/**
 * Routes for cities.
 */
Route::group([
    'as'     => 'cities',
    'prefix' => 'countries',
], function () {
    Route::get('cities', ['uses' => 'CitiesController@index', 'as' => '.index']);
    Route::get('{country}/cities/create', ['uses' => 'CitiesController@create', 'as' => '.create']);
    Route::post('{country}/cities', ['uses' => 'CitiesController@store', 'as' => '.store']);
    Route::get('{country}/cities/{city}/edit', ['uses' => 'CitiesController@edit', 'as' => '.edit']);
    Route::put('{country?}/cities/{city}', ['uses' => 'CitiesController@update', 'as' => '.update']);
    Route::delete('{country}/cities/{city}', ['uses' => 'CitiesController@destroy', 'as' => '.destroy']);
    Route::get('{country}/cities/{city}', ['uses' => 'CitiesController@show', 'as' => '.show']);
});

/**
 * Routes for languages.
 */
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

/**
 * Routes for ajax query.
 */
Route::group([
    'as' => 'check',
    'prefix' => 'check',
], function () {
    Route::get('/', ['uses' => 'CheckLanguagesController@index', 'as' => '.index']);
    Route::get('cities/{country}', ['uses' => 'CheckLanguagesController@getCountryCities', 'as' => 'getCities']);
    Route::get('languages/{city}', ['uses' => 'CheckLanguagesController@getCityLanguages', 'as' => 'getLanguages']);
});
