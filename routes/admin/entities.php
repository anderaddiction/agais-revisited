<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Entities\BankController;
use App\Http\Controllers\Entities\CurrencyController;
use App\Http\Controllers\Entities\UrbanismController;
use App\Http\Controllers\Imports\ExcelImportController;
use App\Http\Controllers\Entities\PaymentGatewayController;

//Entities
Route::prefix('entities')->group(function () {
    // Banks Get data
    Route::get('banks/get-data/{id}', [BankController::class, 'getData'])
        ->name('bank.getdata');

    // Banks Trashed
    Route::get('banks/trashed', [BankController::class, 'trashed'])
        ->name('bank.trashed');

    // Banks Restore
    Route::get('banks/trashed/{id}', [BankController::class, 'restore'])
        ->name('bank.restore');

    // Banks Import
    Route::post('bank/import', [ExcelImportController::class, 'bankExcelImport'])
        ->name('bank.import');

    //Banks
    Route::resource('banks', BankController::class)
        ->parameters(['bank' => 'bank'])
        ->names('bank');

    // Currencies Get data
    Route::get('currencies/get-data/{id}', [CurrencyController::class, 'getData'])
        ->name('currency.getdata');

    // Currencies Trashed
    Route::get('currencies/trashed', [CurrencyController::class, 'trashed'])
        ->name('currency.trashed');

    // Currencies Restore
    Route::get('currencies/trashed/{id}', [CurrencyController::class, 'restore'])
        ->name('currency.restore');

    // Currencies Import
    Route::post('currencies/import', [ExcelImportController::class, 'currencyExcelImport'])
        ->name('currency.import');

    //Currencies
    Route::resource('currencies', CurrencyController::class)
        ->parameters(['currency' => 'currency'])
        ->names('currency');

    // Payment Gateway Get data
    Route::get('payment_gateway/get-data/{id}', [PaymentGatewayController::class, 'getData'])
        ->name('payment_gateway.getdata');

    // Payment Gateway Trashed
    Route::get('payment_gateway/trashed', [PaymentGatewayController::class, 'trashed'])
        ->name('payment_gateway.trashed');

    // Payment Gateway Restore
    Route::get('payment_gateway/trashed/{id}', [PaymentGatewayController::class, 'restore'])
        ->name('payment_gateway.restore');

    // Payment Gateway Import
    Route::post('payment_gateway/import', [ExcelImportController::class, 'payamentGatewayExcelImport'])
        ->name('payment_gateway.import');

    //Payment Gateway
    Route::resource('payment_gateway', PaymentGatewayController::class)
        ->parameters(['payment_gateway' => 'payment_gateway'])
        ->names('payment_gateway');

    // Urbanism Get data
    Route::get('urbanism/get-data/{id}', [UrbanismController::class, 'getData'])
        ->name('urbanism.getdata');

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
