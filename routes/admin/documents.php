<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Invoices\InvoiceController;
use App\Http\Controllers\Documents\DocumentController;
use App\Http\Controllers\Imports\ExcelImportController;

//Documents
Route::prefix('documents')->group(function () {
    // Documents Get data
    Route::get('documents/get-data/{id}', [DocumentController::class, 'getData'])
        ->name('document.getdata');

    // Documents Trashed
    Route::get('documents/trashed', [DocumentController::class, 'trashed'])
        ->name('document.trashed');

    // Documents Restore
    Route::get('documents/trashed/{id}', [DocumentController::class, 'restore'])
        ->name('document.restore');

    //Documents
    Route::resource('documents', DocumentController::class)
        ->parameters(['document' => 'document'])
        ->names('document');

    //Invoices

    // Invoice Trashed
    Route::get('invoices/trashed', [InvoiceController::class, 'trashed'])
        ->name('invoice.trashed');

    // Invoices
    Route::resource('invoices', InvoiceController::class)
        ->parameters(['invoice' => 'invoice'])
        ->names('invoice');
});
