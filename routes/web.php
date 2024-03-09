<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Entities\BankController;
use App\Http\Controllers\Codes\PhoneCodeController;
use App\Http\Controllers\Invoices\InvoiceController;
use App\Http\Controllers\Scheduling\EventController;
use App\Http\Controllers\Territories\CityController;
use App\Http\Controllers\Users\Roles\RoleController;
use App\Http\Controllers\Entities\CurrencyController;
use App\Http\Controllers\Territories\StateController;
use App\Http\Controllers\Documents\DocumentController;
use App\Http\Controllers\Territories\ParishController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Territories\CountryController;
use App\Http\Controllers\Users\Clients\ClientController;
use App\Http\Controllers\Territories\ContinentController;
use App\Http\Controllers\Communications\Mail\MailController;
use App\Http\Controllers\Territories\MunicipalityController;
use App\Http\Controllers\Notifications\NotificationController;
use App\Http\Controllers\Communications\Messenger\MessengerController;
use App\Http\Controllers\TerritoriesComboboxController;

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





//Notifications
Route::prefix('notifications')->group(function () {
    //mail
    Route::put('/mail/read/{id}', [NotificationController::class, 'readNotification'])->name('markAsReadNotification');
});

//Events
Route::prefix('scheduling')->group(function () {
    //Events
    Route::resource('events', EventController::class)
        ->parameters(['event' => 'event'])
        ->names('event');
});
