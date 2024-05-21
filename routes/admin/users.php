<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\Roles\RoleController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Imports\ExcelImportController;
use App\Http\Controllers\Users\Clients\ClientController;


//Users
Route::prefix('users')->group(
    function () {
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

        // roles Restore
        Route::get('roles/trashed/{id}', [RoleController::class, 'restore'])
            ->name('role.restore');

        //Roles
        Route::resource('roles', RoleController::class)
            ->parameters(['role' => 'role'])
            ->names('role');
    }
);
