<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\Roles\RoleController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Imports\ExcelImportController;
use App\Http\Controllers\Users\Clients\ClientController;


//Users
Route::prefix('users')->group(
    function () {
        // Categories Get data
        Route::get('categories/get-data/{id}', [CategoryController::class, 'getData'])
            ->name('category.getdata');

        // Categories Trashed
        Route::get('categories/trashed', [CategoryController::class, 'trashed'])
            ->name('category.trashed');

        // Categories Restore
        Route::get('categories/trashed/{id}', [CategoryController::class, 'restore'])
            ->name('category.restore');

        // Categories Import
        Route::post('categories/import', [ExcelImportController::class, 'categoryExcelImport'])
            ->name('category.import');

        //Categories
        Route::resource('categories', CategoryController::class)
            ->parameters(['category' => 'category'])
            ->names('category');

        // Clients Get data
        Route::get('clients/get-data/{id}', [ClientController::class, 'getData'])
            ->name('client.getdata');

        // Clients Trashed
        Route::get('clients/trashed', [ClientController::class, 'trashed'])
            ->name('client.trashed');

        // Clients Restore
        Route::get('clients/trashed/{id}', [ClientController::class, 'restore'])
            ->name('client.restore');

        //Clients
        Route::resource('clients', ClientController::class)
            ->parameters(['client' => 'client'])
            ->names('client');

        // Clients Trashed
        Route::get('roles/trashed', [RoleController::class, 'trashed'])
            ->name('role.trashed');

        // Roles Import
        Route::post('/roles/import', [ExcelImportController::class, 'roleExcelImport'])
            ->name('role.import');

        // Roles Get data
        Route::get('roles/get-data/{id}', [RoleController::class, 'getData'])
            ->name('role.getdata');

        // Roles Restore
        Route::get('roles/trashed/{id}', [RoleController::class, 'restore'])
            ->name('role.restore');

        //Roles
        Route::resource('roles', RoleController::class)
            ->parameters(['role' => 'role'])
            ->names('role');
    }
);
