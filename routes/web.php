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
Route::post('/inventory/availability', [App\Http\Controllers\Inventory\InventoryController::class, 'index_availability_update'])->name('inventory.availability_update');//show profile
Route::post('/inventory/availability', [App\Http\Controllers\Inventory\InventoryController::class, 'index_newamount_update'])->name('inventory.newamount_update');//show profile
Route::get('/inventory/analysis', [App\Http\Controllers\Inventory\InventoryController::class, 'viewanalysis'])->name('inventory.analysis');//show profile


//Donation
Route::post('/inventory/add', [App\Http\Controllers\Donation\DonationController::class, 'addDonations'])->name('inventory.store');//show profile

//Donation camp management
Route::get('/hospital/camp', [App\Http\Controllers\Hospital\HospitalController::class, 'donationCamp'])->name('hospital.donationcamp');//show profile
Route::post('/hospital/camp', [App\Http\Controllers\Hospital\HospitalController::class, 'donationCampStore'])->name('hospital.storedonationcamp');//show profile

//Blood Bank Management
Route::get('/hospital/bloodrequpdate', [App\Http\Controllers\Hospital\HospitalController::class, 'bloodrequpdate'])->name('hospital.bloodrequpdate');//show profile
Route::post('/hospital/bloodrequpdate/{id}', [App\Http\Controllers\Hospital\HospitalController::class, 'storeBloodrequpdate'])->name('hospital.storeBloodrequpdate');//show profile

//admin
Route::get('/Admin/education', [App\Http\Controllers\AdminController::class, 'education'])->name('admin.education');//show profile
Route::post('/Admin/education', [App\Http\Controllers\AdminController::class, 'storeeducation'])->name('admin.storeeducation');//show profile
Route::get('/Admin/deleteEducation/{id}', [App\Http\Controllers\AdminController::class, 'deleteEducation'])->name('admin.deleteEducation');//show profile

Route::get('/Admin/gallery', [App\Http\Controllers\AdminController::class, 'gallery'])->name('admin.gallery');//show profile
Route::post('/Admin/gallery', [App\Http\Controllers\AdminController::class, 'storegallery'])->name('admin.storegallery');//show profile
Route::get('/Admin/deleteGallery/{id}', [App\Http\Controllers\AdminController::class, 'deleteGallery'])->name('admin.deleteGallery');//show profile

Route::get('/Admin/users', [App\Http\Controllers\AdminController::class, 'viewUsers'])->name('admin.viewUsers');//show profile
Route::post('/Admin/users/{id}', [App\Http\Controllers\AdminController::class, 'storeUserRequpdate'])->name('admin.userRequpdate');//show profileRoute::get('/Admin/deleteGallery/{id}', [App\Http\Controllers\AdminController::class, 'deleteGallery'])->name('admin.deleteGallery');//show profile
Route::get('/Admin/deleteGallery/{id}', [App\Http\Controllers\AdminController::class, 'deleteGallery'])->name('admin.deleteGallery');//show profile
<<<<<<< Updated upstream
=======

Route::get('/emergencySearch', [App\Http\Controllers\Inventory\InventoryController::class, 'index_bloodsearch'])->name('guest.bloodsearch');

// Page Loader Test Route
Route::get('/test-loader', function () {
    return view('test-loader');
})->name('test.loader');

Route::get('/provinces', [LocationController::class, 'getProvinces']);
Route::get('/districts', [LocationController::class, 'getDistricts']);
Route::get('/location-data', [LocationController::class, 'getLocationData']);
>>>>>>> Stashed changes
