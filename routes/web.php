<?php

use App\Models\Hospital\DonationCamp;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    try{
        $camps = DonationCamp::all();
        return view('welcome',compact('camps'));
    }catch(\Exception $e){
        return view('welcome');
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//show profile

//Donor
Route::get('/donor/create', [App\Http\Controllers\Donor\DonorController::class, 'create'])->name('donor.create');//show profile
Route::post('/donor/create', [App\Http\Controllers\Donor\DonorController::class, 'store'])->name('donor.store');//show profile

//Staff
Route::get('/hospital/create', [App\Http\Controllers\Hospital\HospitalController::class, 'create'])->name('hospital.create');//show profile
Route::post('/hospital/create', [App\Http\Controllers\Hospital\HospitalController::class, 'store'])->name('hospital.store');//show profile
Route::get('/hospital/search', [App\Http\Controllers\Hospital\HospitalController::class, 'search'])->name('hospital.search');//show profile
Route::get('/hospital/bloodreq', [App\Http\Controllers\Hospital\HospitalController::class, 'requestBlood'])->name('hospital.bloodreq');//show profile
Route::post('/hospital/bloodreq', [App\Http\Controllers\Hospital\HospitalController::class, 'requestBloodstore'])->name('hospital.requestBloodstore');//show profile
Route::get('/hospital/viewbloodreq', [App\Http\Controllers\Hospital\HospitalController::class, 'viewrequestBlood'])->name('hospital.viewbloodreq');//show profile

//Blood Inventory
Route::get('/inventory/home', [App\Http\Controllers\Inventory\InventoryController::class, 'index'])->name('inventory.home');//show profile
Route::get('/inventory/add', [App\Http\Controllers\Inventory\InventoryController::class, 'index_add'])->name('inventory.add_donation');//show profile
Route::get('/inventory/availability', [App\Http\Controllers\Inventory\InventoryController::class, 'index_availability'])->name('inventory.availability');//show profile
Route::get('/inventory/bloodstatus', [App\Http\Controllers\Inventory\InventoryController::class, 'index_bloodstatus'])->name('inventory.bloodstatus');//show profile
Route::get('/inventory/check_exp', [App\Http\Controllers\Inventory\InventoryController::class, 'index_check_exp'])->name('inventory.check_exp');//show profile

//Donation
Route::post('/inventory/add', [App\Http\Controllers\Donation\DonationController::class, 'addDonations'])->name('inventory.store');//show profile

//Donation camp management
Route::get('/hospital/camp', [App\Http\Controllers\Hospital\HospitalController::class, 'donationCamp'])->name('hospital.donationcamp');//show profile
Route::post('/hospital/camp', [App\Http\Controllers\Hospital\HospitalController::class, 'donationCampStore'])->name('hospital.storedonationcamp');//show profile
