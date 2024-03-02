<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Entities\BankController;
use App\Http\Controllers\Entities\CurrencyController;

//Entities
Route::prefix('entities')->group(function () {
    // Banks Trashed
    Route::get('banks/trashed', [BankController::class, 'trashed'])
        ->name('bank.trashed');

    // Banks Restore
    Route::get('banks/trashed/{id}', [BankController::class, 'restore'])
        ->name('bank.restore');

    //Banks
    Route::resource('banks', BankController::class)
        ->parameters(['bank' => 'bank'])
        ->names('bank');

    // Currencies Trashed
    Route::get('currencies/trashed', [CurrencyController::class, 'trashed'])
        ->name('currency.trashed');

    // Currencies Restore
    Route::get('currencies/trashed/{id}', [CurrencyController::class, 'restore'])
        ->name('currency.restore');

    //Currencies
    Route::resource('currencies', CurrencyController::class)
        ->parameters(['currency' => 'currency'])
        ->names('currency');
});
