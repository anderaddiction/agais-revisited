<?php

use App\Http\Controllers\Images\ImageController;
use Illuminate\Support\Facades\Route;

//Images
Route::prefix('images')->group(function () {
    // Image Get data
    Route::get('images/get-data/{id}', [ImageController::class, 'getData'])
        ->name('image.getdata');

    // Image Trashed
    Route::get('/trashed', [ImageController::class, 'trashed'])
        ->name('image.trashed');

    // Image Restore
    Route::get('/trashed/{id}', [ImageController::class, 'restore'])
        ->name('image.restore');

    // Image Import
    // Route::post('countries/import', [ExcelImportController::class, 'imageExcelImport'])
    //     ->name('image.import');

    //Image
    Route::resource('images', ImageController::class)
        ->parameters(['image' => 'image'])
        ->names('image');
});
