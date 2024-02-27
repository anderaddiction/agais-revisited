<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Territories\CityController;
use App\Http\Controllers\Territories\StateController;
use App\Http\Controllers\Territories\ParishController;
use App\Http\Controllers\Territories\CountryController;
use App\Http\Controllers\Territories\ContinentController;
use App\Http\Controllers\Territories\MunicipalityController;


//Territories
Route::prefix('territories')->group(function () {
    //Continent
    Route::resource('continents', ContinentController::class)
        ->parameters(['continent' => 'continent'])
        ->names('continent');

    //Country
    Route::resource('countries', CountryController::class)
        ->parameters(['country' => 'country'])
        ->names('country');

    //State
    Route::resource('states', StateController::class)
        ->parameters(['state' => 'state'])
        ->names('state');

    //Municipality
    Route::resource('municipalities', MunicipalityController::class)
        ->parameters(['municipality' => 'municipality'])
        ->names('municipality');

    //Parish
    Route::resource('parishes', ParishController::class)
        ->parameters(['parish' => 'parish'])
        ->names('parish');

    //City
    Route::resource('cities', CityController::class)
        ->parameters(['city' => 'city'])
        ->names('city');
});
