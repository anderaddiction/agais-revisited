<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Territories\CityController;
use App\Http\Controllers\Territories\StateController;
use App\Http\Controllers\Territories\ParishController;
use App\Http\Controllers\Territories\CountryController;
use App\Http\Controllers\Imports\ExcelImportController;
use App\Http\Controllers\Territories\ContinentController;
use App\Http\Controllers\Territories\MunicipalityController;


//Territories
Route::prefix('territories')->group(function () {
    //Continent
    // Continent Trashed
    Route::get('continents/trashed', [ContinentController::class, 'trashed'])
        ->name('continent.trashed');

    // Continent Restore
    Route::get('continents/trashed/{id}', [ContinentController::class, 'restore'])
        ->name('continent.restore');

    // Continent Import
    Route::post('continents/import', [ExcelImportController::class, 'continentExcelImport'])
        ->name('continent.import');

    Route::resource('continents', ContinentController::class)
        ->parameters(['continent' => 'continent'])
        ->names('continent');

    // Country Trashed
    Route::get('/countries/trashed', [CountryController::class, 'trashed'])
        ->name('country.trashed');

    // Country Restore
    Route::get('/countries/trashed/{id}', [CountryController::class, 'restore'])
        ->name('country.restore');

    // Country Import
    Route::post('countries/import', [ExcelImportController::class, 'countryExcelImport'])
        ->name('country.import');

    //Country
    Route::resource('countries', CountryController::class)
        ->parameters(['country' => 'country'])
        ->names('country');

    // State Trashed
    Route::get('/states/trashed', [StateController::class, 'trashed'])
        ->name('state.trashed');

    // States Restore
    Route::get('/states/trashed/{id}', [StateController::class, 'restore'])
        ->name('state.restore');

    // State Import
    Route::post('/states/import', [ExcelImportController::class, 'stateExcelImport'])
        ->name('state.import');

    //State
    Route::resource('states', StateController::class)
        ->parameters(['state' => 'state'])
        ->names('state');

    // Municipality Trashed
    Route::get('/municipalities/trashed', [MunicipalityController::class, 'trashed'])
        ->name('municipality.trashed');

    // Municipality Restore
    Route::get('/municipalities/trashed/{id}', [MunicipalityController::class, 'restore'])
        ->name('municipality.restore');

    // Municipality Import
    Route::post('/municipalities/import', [ExcelImportController::class, 'municipalityExcelImport'])
        ->name('municipality.import');

    //Municipality
    Route::resource('municipalities', MunicipalityController::class)
        ->parameters(['municipality' => 'municipality'])
        ->names('municipality');

    // Parish Trashed
    Route::get('/parishes/trashed', [ParishController::class, 'trashed'])
        ->name('parish.trashed');

    // Parish Restore
    Route::get('/parishes/trashed/{id}', [ParishController::class, 'restore'])
        ->name('parish.restore');

    // Parish Import
    Route::post('/parishes/import', [ExcelImportController::class, 'parishExcelImport'])
        ->name('parish.import');

    //Parish
    Route::resource('parishes', ParishController::class)
        ->parameters(['parish' => 'parish'])
        ->names('parish');

    // City Trashed
    Route::get('/cities/trashed', [CityController::class, 'trashed'])
        ->name('city.trashed');

    // City Restore
    Route::get('/cities/trashed/{id}', [CityController::class, 'restore'])
        ->name('city.restore');

    // City Import
    Route::post('/cities/import', [ExcelImportController::class, 'cityExcelImport'])
        ->name('city.import');

    //City
    Route::resource('cities', CityController::class)
        ->parameters(['city' => 'city'])
        ->names('city');
});
