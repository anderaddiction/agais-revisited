<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Invoices\InvoiceController;
use App\Http\Controllers\Documents\DocumentController;
use App\Http\Controllers\Imports\ExcelImportController;
use App\Http\Controllers\Entities\PaymentGatewayController;

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

    // Invoice Trashed
    Route::get('invoices/trashed', [InvoiceController::class, 'trashed'])
        ->name('invoice.trashed');

    // Invoices
    Route::resource('invoices', InvoiceController::class)
        ->parameters(['invoice' => 'invoice'])
        ->names('invoice');

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
});
