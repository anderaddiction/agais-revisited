<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Imports\ExcelImportController;
use App\Http\Controllers\Services\ServiceController;

//services
Route::prefix('services')->group(function () {
    // Service Get data
    Route::get('services/get-data/{id}', [ServiceController::class, 'getData'])
        ->name('service.getdata');

    // Service Trashed
    Route::get('/trashed', [ServiceController::class, 'trashed'])
        ->name('service.trashed');

    // Service Restore
    Route::get('/trashed/{id}', [ServiceController::class, 'restore'])
        ->name('service.restore');

    // Service Import
    Route::post('services/import', [ExcelImportController::class, 'serviceExcelImport'])
        ->name('service.import');

    //Service
    Route::resource('services', ServiceController::class)
        ->parameters(['service' => 'service'])
        ->names('service');
});
