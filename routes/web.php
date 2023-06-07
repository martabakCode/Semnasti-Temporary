<?php

use App\Http\Controllers\Admin\BroadcastController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegistrantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtpController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('landing');
});

Route::post('otp/request/{phone_number}', [OtpController::class, 'request'])->name('otp.request');
Route::post('otp/validate/{phone_number}/{number}', [OtpController::class, 'validateRegistrant'])->name('otp.validate');
Route::post('register', [RegistrantController::class, 'store'])->name('registrant.register');


$static_route = ['user', 'registrant'];

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () use ($static_route) {
    Route::get('/', [DashboardController::class, 'index'])->name('dahsboard');

    foreach ($static_route as $key => $prefix) {
        $prefix_uc = ucfirst($prefix);
        $controller = "App\\Http\\Controllers\\Admin\\{$prefix_uc}Controller";

        Route::get("/$prefix", $controller.'@index')->name("$prefix");
        Route::get("/$prefix/data", $controller.'@data')->name("$prefix.data");
        Route::post("/$prefix/store", $controller.'@store')->name("$prefix.store");
        Route::post("/$prefix/update/{id?}", $controller.'@update')->name("$prefix.update");
        Route::post("/$prefix/destroy/{id?}", $controller.'@destroy')->name("$prefix.destroy");
        Route::get("/$prefix/export", $controller.'@export')->name("$prefix.export");
    }

    /** Custom Route */
    Route::post("/registrant/custom-update/{id}", [RegistrantController::class, 'customUpdate'])->name("registrant.custom-update");

    Route::get("/broadcast", [BroadcastController::class, 'index'])->name("broadcast");
    Route::get("/broadcast/data", [BroadcastController::class, 'data'])->name("broadcast.data");
    Route::get("/broadcast/detail", [BroadcastController::class, 'detail'])->name("broadcast.data.detail");
    Route::post("/broadcast/store", [BroadcastController::class, 'store'])->name("broadcast.store");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
