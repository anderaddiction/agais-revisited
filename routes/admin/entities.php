<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Entities\BankController;
use App\Http\Controllers\Entities\CurrencyController;

//Entities
Route::prefix('entities')->group(function () {
    //Banks
    Route::resource('banks', BankController::class)
        ->parameters(['bank' => 'bank'])
        ->names('bank');

    //Currencies
    Route::resource('currencies', CurrencyController::class)
        ->parameters(['currency' => 'currency'])
        ->names('currency');
});
