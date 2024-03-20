<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TerritoriesComboboxController;
//Combobox
Route::prefix('dropdowns')->group(
    function () {
        Route::get('get_countries', [TerritoriesComboboxController::class, 'getCountries'])->name('getCountries');
        Route::get('get_states', [TerritoriesComboboxController::class, 'getStates'])->name('getStates');
        Route::get('get_municipalities', [TerritoriesComboboxController::class, 'getMunicipalities'])->name('getMunicipalities');
        Route::get('get_parishes', [TerritoriesComboboxController::class, 'getParishes'])->name('getParishes');
        Route::get('get_cities', [TerritoriesComboboxController::class, 'getCities'])->name('getCities');
    }
);
