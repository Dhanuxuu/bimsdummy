<?php

use App\Models\Donor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/bloodavailability', [App\Http\Controllers\HomeController::class, 'index1'])->name('bloodavailability');

Route::get('/bloodbank', [App\Http\Controllers\HomeController::class, 'index2'])->name('bloodbank');

Route::get('/donation/donationcamp', [App\Http\Controllers\HomeController::class, 'index3'])->name('donation/donationcamp');

Route::get('/education/bloodeducation', [App\Http\Controllers\HomeController::class, 'index4'])->name('bloodeducation');

Route::get('/bloodeduadd', [App\Http\Controllers\HomeController::class, 'index5'])->name('bloodeduadd');

Route::get('/hospital/hospitalrequest', [App\Http\Controllers\HomeController::class, 'index6'])->name('hospital/hospitalrequest');

Route::get('/auditlog', [App\Http\Controllers\HomeController::class, 'index7'])->name('auditlog');

Route::get('/donation/adddonacamp', [App\Http\Controllers\HomeController::class, 'index8'])->name('donation/adddonacamp');

Route::get('/addbloodbank', [App\Http\Controllers\HomeController::class, 'index9'])->name('addbloodbank');

Route::get('/updatebloodbank', [App\Http\Controllers\HomeController::class, 'index10'])->name('updatebloodbank');

Route::get('/delbloodbank', [App\Http\Controllers\HomeController::class, 'index11'])->name('delbloodbank');

Route::get('/modification', [App\Http\Controllers\HomeController::class, 'index12'])->name('modification');

Route::get('/auth/donoregister', [App\Http\Controllers\HomeController::class, 'index13'])->name('auth/donoregister');

Route::get('/bloodbank/bbinventory', [App\Http\Controllers\HomeController::class, 'index14'])->name('bloodbank/bbinventory');

Route::get('/donation/donorhome', [App\Http\Controllers\HomeController::class, 'index15'])->name('donation/donorhome');

Route::get('/donation/modifycamp', [App\Http\Controllers\HomeController::class, 'index16'])->name('donation/modifycamp');

Route::get('/donation/approvedonors', [App\Http\Controllers\HomeController::class, 'index17'])->name('donation/approvedonors');

Route::get('/auth/hosbankregister', [App\Http\Controllers\HomeController::class, 'index18'])->name('auth/hosbankregister');

Route::get('/bloodbank/bloodreq', [App\Http\Controllers\HomeController::class, 'index19'])->name('bloodbank/bloodreq');

Route::get('/hospital/bavailabilityhnb', [App\Http\Controllers\HomeController::class, 'index20'])->name('hospital/bavailabilityhnb');

Route::get('/bloodinventory/bihome', [App\Http\Controllers\HomeController::class, 'index21'])->name('bloodinventory/bihome');//bloodinventory/bihome

Route::get('/bloodinventory/adddonation', [App\Http\Controllers\HomeController::class, 'index22'])->name('bloodinventory/adddonation');

Route::get('/bloodinventory/checkexp', [App\Http\Controllers\HomeController::class, 'index23'])->name('bloodinventory/checkexp');

Route::get('/bloodinventory/bloodstatus', [App\Http\Controllers\HomeController::class, 'index24'])->name('bloodinventory/bloodstatus');

Route::get('/bloodinventory/availability', [App\Http\Controllers\HomeController::class, 'index25'])->name('bloodinventory/availability');


// Route::get('/auth/donoregister',function(){
//     return view('auth/donoregister');
// });

Route::post('/auth/donoregister',function(){
    // $donor = new Donor();
    // $donor->fname = request('fname');
    // $donor->lname = request('lname');
    // $donor->nic = request('nic');
    // $donor->address = request('address');
    // $donor->city = request('city');
    // $donor->email = request('email');
    // $donor->phone = request('phone');
    // $donor->gender = request('gender');
    // $donor->dob = request('dob');
    // $donor->btype = request('btype');
    // $donor->weight = request('weight');
    // $donor->diseases = request('diseases');
    // $donor->save();
    Donor::create([
        'fname' => request('fname'),
        'lname' => request('lname'),
        'nic' => request('nic'),
        'address' => request('address'),
        'city' => request('city'),
        'email' => request('email'),
        'phone' => request('phone'),
        'gender' => request('gender'),
        'dob' => request('dob'),
        'btype' => request('btype'),
        'weight' => request('weight'),
        'diseases' => request('diseases'),
    ]);
    // $donor->fname = request('fname');
    return redirect('/');
    //return view('donoregister');
});

// Route::get('#',function(){
//     $donors = DB::table('donors')->get();
//     'donors'->$donors;
// });