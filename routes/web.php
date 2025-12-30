<?php

use App\Models\Flight;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AirportController;
use App\Http\Controllers\Admin\AirlineController;
use App\Http\Controllers\Admin\FlightController;
use App\Http\Controllers\User\FlightSearchController;
use App\Http\Controllers\User\BookingController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return auth()->user()->role === 'admin' 
        ? redirect('/admin/dashboard') 
        : redirect('/user/dashboard');
    });

    Route::get('/user/dashboard', function () {
        return view('dashboard.user');
    });

    Route::middleware('admin')->group(function (){
        Route::get('/admin/dashboard', function () {
            return view('dashboard.admin');
        });
    });
    
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::resource('airports', AirportController::class);
    Route::resource('airlines', AirlineController::class);
    Route::resource('flights', FlightController::class);

});

Route::middleware(['auth'])->group(function () {
    Route::get('/flights', [FlightSearchController::class, 'index']);
    Route::post('/bookings/{flight}', [BookingController::class, 'store']);

    Route::get('/my-bookings', [BookingController::class,'index'])->name('bookings');

});     