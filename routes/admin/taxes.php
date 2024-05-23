<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Taxes\TaxController;
use App\Http\Controllers\Imports\ExcelImportController;


//Taxes
Route::prefix('taxes')->group(function () {
    // Tax Trashed
    Route::get('/trashed', [TaxController::class, 'trashed'])
        ->name('tax.trashed');

    // Tax Restore
    Route::get('/trashed/{id}', [TaxController::class, 'restore'])
        ->name('tax.restore');

    // Tax Import
    Route::post('countries/import', [ExcelImportController::class, 'taxExcelImport'])
        ->name('tax.import');

    //Tax
    Route::resource('taxes', TaxController::class)
        ->parameters(['tax' => 'tax'])
        ->names('tax');
});
