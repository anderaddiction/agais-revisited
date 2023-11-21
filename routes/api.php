<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Codes\PhoneCodeController;
use App\Http\Controllers\Api\Entities\BankController;
use App\Http\Controllers\Api\Territories\CityController;
use App\Http\Controllers\Api\Territories\StateController;
use App\Http\Controllers\Api\Territories\ParishController;
use App\Http\Controllers\Api\Territories\CountryController;
use App\Http\Controllers\Territories\MunicipalityController;
use App\Http\Controllers\Api\Territories\ContinentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    //Codes
    // Route::prefix('codes')->group(function () {
    //     //Phone Codes
    //     Route::resource('phone-codes', PhoneCodeController::class)
    //         ->parameters(['phone' => 'phone'])
    //         ->names('phone');
    // });

    // //Entities
    // Route::prefix('entities')->group(function () {
    //     //Banks
    //     Route::resource('banks', BankController::class)
    //         ->parameters(['bank' => 'bank'])
    //         ->names('bank');
    // });

    // //Territories
    // Route::prefix('territories')->group(function () {
    //     //Continent
    //     Route::resource('continents', ContinentController::class)
    //         ->parameters(['continent' => 'continent'])
    //         ->names('continent');

    //     //Country
    //     Route::resource('countries', CountryController::class)
    //         ->parameters(['country' => 'country'])
    //         ->names('country');

    //     //State
    //     Route::resource('states', StateController::class)
    //         ->parameters(['state' => 'state'])
    //         ->names('state');

    //     //Municipality
    //     Route::resource('municipalities', MunicipalityController::class)
    //         ->parameters(['municipality' => 'municipality'])
    //         ->names('municipality');

    //     //Parish
    //     Route::resource('parishes', ParishController::class)
    //         ->parameters(['parish' => 'parish'])
    //         ->names('parish');

    //     //City
    //     Route::resource('cities', CityController::class)
    //         ->parameters(['city' => 'city'])
    //         ->names('city');
    // });
});
