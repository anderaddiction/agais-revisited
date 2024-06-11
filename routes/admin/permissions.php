<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Imports\ExcelImportController;
use App\Http\Controllers\Permissions\PermissionController;

//Permissions
Route::prefix('permissions')->group(function () {
    // Permission Get data
    Route::get('permissions/get-data/{id}', [PermissionController::class, 'getData'])
        ->name('permission.getdata');

    // Permission Trashed
    Route::get('/trashed', [PermissionController::class, 'trashed'])
        ->name('permission.trashed');

    // Permission Restore
    Route::get('/trashed/{id}', [PermissionController::class, 'restore'])
        ->name('permission.restore');

    //Permission Import
    Route::post('permissions/import', [ExcelImportController::class, 'permissionExcelImport'])
        ->name('permission.import');

    //Permission
    Route::resource('permissions', PermissionController::class)
        ->parameters(['permission' => 'permission'])
        ->names('permission');
});
