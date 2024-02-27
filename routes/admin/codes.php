<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Codes\PhoneCodeController;

//Codes
Route::prefix('codes')->group(function () {
    //Phone Codes
    Route::resource('phone-codes', PhoneCodeController::class)
        ->parameters(['phone' => 'phone'])
        ->names('phone');
});
