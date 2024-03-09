<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Codes\PhoneCodeController;

//Codes
Route::prefix('codes')->group(function () {
    // Phone Trashed
    Route::get('phone-codes/trashed', [PhoneCodeController::class, 'trashed'])
        ->name('phone.trashed');

    // Phone Restore
    Route::get('phone-codes/trashed/{id}', [PhoneCodeController::class, 'restore'])
        ->name('phone.restore');

    //Phone Codes
    Route::resource('phone-codes', PhoneCodeController::class)
        ->parameters(['phone' => 'phone'])
        ->names('phone');
});
