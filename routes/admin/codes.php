<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Codes\PhoneCodeController;
use App\Http\Controllers\Imports\ExcelImportController;

//Codes
Route::prefix('codes')->group(function () {
    // Phone Get data
    Route::get('phone-codes/get-data/{id}', [PhoneCodeController::class, 'getData'])
        ->name('phone.getdata');

    // Phone Trashed
    Route::get('phone-codes/trashed', [PhoneCodeController::class, 'trashed'])
        ->name('phone.trashed');

    // Phone Restore
    Route::get('phone-codes/trashed/{id}', [PhoneCodeController::class, 'restore'])
        ->name('phone.restore');

    // Phone Import
    Route::post('phone-codes/import', [ExcelImportController::class, 'phoneCodeExcelImport'])
        ->name('phone.import');

    //Phone Codes
    Route::resource('phone-codes', PhoneCodeController::class)
        ->parameters(['phone' => 'phone'])
        ->names('phone');
});
