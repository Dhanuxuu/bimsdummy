<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/bloodavailability', [App\Http\Controllers\HomeController::class, 'index1'])->name('bloodavailability');

Route::get('/bloodbank', [App\Http\Controllers\HomeController::class, 'index2'])->name('bloodbank');

Route::get('/donationcamp', [App\Http\Controllers\HomeController::class, 'index3'])->name('donationcamp');

Route::get('/bloodeducation', [App\Http\Controllers\HomeController::class, 'index4'])->name('bloodeducation');

Route::get('/bloodeduadd', [App\Http\Controllers\HomeController::class, 'index5'])->name('bloodeduadd');