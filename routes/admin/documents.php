<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Invoices\InvoiceController;
use App\Http\Controllers\Documents\DocumentController;

//Documents
Route::prefix('documents')->group(function () {
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
    Route::resource('invoices', InvoiceController::class)
        ->parameters(['invoice' => 'invoice'])
        ->names('invoice');
});
