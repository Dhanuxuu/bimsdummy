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

Route::get('/hospitalrequest', [App\Http\Controllers\HomeController::class, 'index6'])->name('hospitalrequest');

Route::get('/auditlog', [App\Http\Controllers\HomeController::class, 'index7'])->name('auditlog');

Route::get('/adddonacamp', [App\Http\Controllers\HomeController::class, 'index8'])->name('adddonacamp');

Route::get('/addbloodbank', [App\Http\Controllers\HomeController::class, 'index9'])->name('addbloodbank');

Route::get('/updatebloodbank', [App\Http\Controllers\HomeController::class, 'index10'])->name('updatebloodbank');

Route::get('/delbloodbank', [App\Http\Controllers\HomeController::class, 'index11'])->name('delbloodbank');

Route::get('/modification', [App\Http\Controllers\HomeController::class, 'index12'])->name('modification');