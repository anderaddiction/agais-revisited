<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Entities\BankController;
use App\Http\Controllers\Entities\CurrencyController;
use App\Http\Controllers\Entities\UrbanismController;

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

    // Urbanism Trashed
    Route::get('urbanism/trashed', [UrbanismController::class, 'trashed'])
        ->name('urbanism.trashed');

    // Urbanism Restore
    Route::get('urbanism/trashed/{id}', [UrbanismController::class, 'restore'])
        ->name('urbanism.restore');

    //Urbanism
    Route::resource('urbanism', UrbanismController::class)
        ->parameters(['urbanism' => 'urbanism'])
        ->names('urbanism');
});
