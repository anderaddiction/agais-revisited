<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Invoices\InvoiceController;
use App\Http\Controllers\Documents\DocumentController;

//Documents
Route::prefix('documents')->group(function () {
    //Phone Codes
    Route::resource('documents', DocumentController::class)
        ->parameters(['document' => 'document'])
        ->names('document');

    //Invoices
    Route::resource('invoices', InvoiceController::class)
        ->parameters(['invoice' => 'invoice'])
        ->names('invoice');
});
