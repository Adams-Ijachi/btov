<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/signup', function () {
    return view('components.signup');
})->name('signup');

Route::get('/login', function () {
    return view('components.signin');
})->name('login');

// logout
Route::get('/logout', function () {
    \Auth::logout();
    return redirect()->route('home');
})->name('logout');

Route::post('/register', [\App\Http\Controllers\UserAuthController::class, 'register'])->name('register');
Route::post('/login', [\App\Http\Controllers\UserAuthController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/doctors', [\App\Http\Controllers\UserAppointmentController::class, 'index'])->name('doctors');

    Route::get('/doctors/search', [\App\Http\Controllers\UserAppointmentController::class, 'search'])->name('doctors.search');
    Route::get('/doctors/order', [\App\Http\Controllers\UserAppointmentController::class, 'orderDoctors'])->name('doctors.order');

    Route::get('/doctors/{id}', [\App\Http\Controllers\UserAppointmentController::class, 'details'])->name('doctors.details');


//    Route::get('/appointments', [\App\Http\Controllers\UserAppointmentController::class, 'appointments'])->name('appointments');
    Route::get('/appointment/{id}', [\App\Http\Controllers\UserAppointmentController::class, 'appointment'])->name('appointment');
    Route::post('/appointment/{id}', [\App\Http\Controllers\UserAppointmentController::class, 'book'])->name('book');
});
