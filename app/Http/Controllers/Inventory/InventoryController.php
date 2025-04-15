<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation\Donation;

class InventoryController extends Controller
{
    //
    public function index()
    {
        return view('inventory.home');
    }

    public function index_add()
    {
        return view('inventory.add_donation');
    }

    public function index_availability()
    {
        return view('inventory.availability');
    }

    public function index_bloodstatus()
    {
        return view('inventory.bloodstatus');
    }

    public function index_check_exp()
    {
        $donate = Donation::all();
        return view('inventory.check_exp',compact('donate'));
    }
}
