<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\Roles\RoleController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Users\Clients\ClientController;


//Users
Route::prefix('users')->group(
    function () {
        //Categories
        // Continent Trashed
        Route::get('categories/trashed', [CategoryController::class, 'trashed'])
            ->name('category.trashed');

        // Category Restore
        Route::get('categories/trashed/{id}', [CategoryController::class, 'restore'])
            ->name('category.restore');

        Route::resource('categories', CategoryController::class)
            ->parameters(['category' => 'category'])
            ->names('category');

        //Clients
        Route::resource('clients', ClientController::class)
            ->parameters(['client' => 'client'])
            ->names('client');

        //Roles
        Route::resource('roles', RoleController::class)
            ->parameters(['role' => 'role'])
            ->names('role');
    }
);
