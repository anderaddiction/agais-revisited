<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Entities\BankController;
use App\Http\Controllers\Codes\PhoneCodeController;
use App\Http\Controllers\Territories\CityController;
use App\Http\Controllers\Users\Roles\RoleController;
use App\Http\Controllers\Entities\CurrencyController;
use App\Http\Controllers\Territories\StateController;
use App\Http\Controllers\Documents\DocumentController;
use App\Http\Controllers\Territories\ParishController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Communications\Mail\MailController;
use App\Http\Controllers\Communications\Messenger\MessengerController;
use App\Http\Controllers\Notifications\NotificationController;
use App\Http\Controllers\Scheduling\EventController;
use App\Http\Controllers\Territories\CountryController;
use App\Http\Controllers\Territories\ContinentController;
use App\Http\Controllers\Territories\MunicipalityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

//Language Translation
Route::get('index/{locale}', [HomeController::class, 'lang']);

Route::get('/', [HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [HomeController::class, 'index'])->name('index');
Route::get('dashboard-crypto', function () {
    return view('dashboard-crypto');
});

//Codes
Route::prefix('codes')->group(function () {
    //Phone Codes
    Route::resource('phone-codes', PhoneCodeController::class)
        ->parameters(['phone' => 'phone'])
        ->names('phone');
});

//Communications
Route::prefix('communications')->group(function () {
    //Messenger
    Route::resource('messenger', MessengerController::class)
        ->parameters(['messenger' => 'messenger'])
        ->names('messenger');
    Route::get('/messenger/user/{id}', [MessengerController::class, 'findUser'])
        ->name('find.user');

    //Mails
    Route::resource('mails', MailController::class)
        ->parameters(['mail' => 'mail'])
        ->names('mail');
});

//Documents
Route::prefix('documents')->group(function () {
    //Phone Codes
    Route::resource('documents', DocumentController::class)
        ->parameters(['document' => 'document'])
        ->names('document');
});

//Entities
Route::prefix('entities')->group(function () {
    //Banks
    Route::resource('banks', BankController::class)
        ->parameters(['bank' => 'bank'])
        ->names('bank');

    //Currencies
    Route::resource('currencies', CurrencyController::class)
        ->parameters(['currency' => 'currency'])
        ->names('currency');
});

//Notifications
Route::prefix('notifications')->group(function () {
    //mail
    Route::put('/mail/read/{id}', [NotificationController::class, 'readNotification'])->name('markAsReadNotification');
});

//Territories
Route::prefix('scheduling')->group(function () {
    //Continent
    Route::resource('events', EventController::class)
        ->parameters(['event' => 'event'])
        ->names('event');
});

//Territories
Route::prefix('territories')->group(function () {
    //Continent
    Route::resource('continents', ContinentController::class)
        ->parameters(['continent' => 'continent'])
        ->names('continent');

    //Country
    Route::resource('countries', CountryController::class)
        ->parameters(['country' => 'country'])
        ->names('country');

    //State
    Route::resource('states', StateController::class)
        ->parameters(['state' => 'state'])
        ->names('state');

    //Municipality
    Route::resource('municipalities', MunicipalityController::class)
        ->parameters(['municipality' => 'municipality'])
        ->names('municipality');

    //Parish
    Route::resource('parishes', ParishController::class)
        ->parameters(['parish' => 'parish'])
        ->names('parish');

    //City
    Route::resource('cities', CityController::class)
        ->parameters(['city' => 'city'])
        ->names('city');
});

//Users
Route::prefix('users')->group(
    function () {
        //Categories
        Route::resource('categories', CategoryController::class)
            ->parameters(['category' => 'category'])
            ->names('category');

        //Roles
        Route::resource('roles', RoleController::class)
            ->parameters(['role' => 'role'])
            ->names('role');
    }
);
