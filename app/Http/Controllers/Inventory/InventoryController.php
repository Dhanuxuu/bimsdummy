<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Hospital\BloodType;
use App\Models\Hospital\Hospital;
use App\Models\Inventory\BloodInventory;
use Illuminate\Support\Facades\Auth;
use App\Models\Hospital\DonationCamp;
use Illuminate\Http\Request;
use App\Models\Donation\Donation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class InventoryController extends Controller
{
    //
    public function index()
    {
        return view('inventory.home');
    }

    public function index_add()
    {
        $camps = DonationCamp::all();
        $btypes = BloodType::all();
        $hospitals = Hospital::all();
        $user = Auth::user();
        return view('inventory.add_donation', compact('camps', 'btypes', 'hospitals', 'user'));
    }

    public function index_availability()
    {
        $users = Hospital::where('uname', Auth::id())->value('id');
        $camps = Donation::all();
        $btypes = BloodType::all();
        
        $ap = Donation::where('btype', '1')
                    ->where('hbid', $users)
                    ->sum('amount');
        $an = Donation::where('btype', '2')
                    ->where('hbid', $users)
                    ->sum('amount');
        $bp = Donation::where('btype', '3')
                    ->where('hbid', $users)
                    ->sum('amount');
        $bn = Donation::where('btype', '4')
                    ->where('hbid', $users)
                    ->sum('amount');
        $op = Donation::where('btype', '5')
                    ->where('hbid', $users)
                    ->sum('amount');
        $on = Donation::where('btype', '6')
                    ->where('hbid', $users)
                    ->sum('amount');
        $abp = Donation::where('btype', '7')
                    ->where('hbid', $users)
                    ->sum('amount');
        $abn = Donation::where('btype', '8')
                    ->where('hbid', $users)
                    ->sum('amount');

        $binventory = BloodInventory::where('hbid',$users)
                    ->orderBy('id', 'desc') // or 'created_at', 'desc'
                    ->first();

        return view('inventory.availability',compact('camps','btypes','ap','an','bp','bn','op','on','abp','abn','binventory','users'));
    }

    public function index_bloodstatus()
    {
        $hospitals = Hospital::all();
        $bloodtypes = BloodType::all();
        $latestInventories = BloodInventory::join(DB::raw('
        (
            SELECT hbid, MAX(updated_at) as latest_time
            FROM blood_inventory
            GROUP BY hbid
        ) as latest'),
        function ($join) {
            $join->on('blood_inventory.hbid', '=', 'latest.hbid')
                ->on('blood_inventory.updated_at', '=', 'latest.latest_time');
        })
        ->select('blood_inventory.*')
        ->get();
        $provinces = DB::table('hospital')->select('province')->distinct()->pluck('province');
        $districts = DB::table('hospital')->select('district')->distinct()->pluck('district');

        return view('inventory.bloodstatus',compact('hospitals','bloodtypes','latestInventories','provinces','districts'));
    }

    public function index_bloodsearch()
    {
        $hospitals = Hospital::all();
        $bloodtypes = BloodType::all();
        $latestInventories = BloodInventory::join(DB::raw('
        (
            SELECT hbid, MAX(updated_at) as latest_time
            FROM blood_inventory
            GROUP BY hbid
        ) as latest'),
        function ($join) {
            $join->on('blood_inventory.hbid', '=', 'latest.hbid')
                ->on('blood_inventory.updated_at', '=', 'latest.latest_time');
        })
        ->select('blood_inventory.*')
        ->get();
        $provinces = DB::table('hospital')->select('province')->distinct()->pluck('province');
        $districts = DB::table('hospital')->select('district')->distinct()->pluck('district');

        return view('guest.bloodsearch',compact('hospitals','bloodtypes','latestInventories','provinces','districts'));
    }

    public function index_check_exp()
    {
        $donate = Donation::all();
        return view('inventory.check_exp',compact('donate'));
    }

    public function index_availability_update(Request $request)
    {
        $blood_inventory = BloodInventory::create([
            "hbid" => $request->hbid,
            "ap" => $request->ap,
            "an" => $request->an,
            "bp" => $request->bp,
            "bn" => $request->bn,
            "op" => $request->op,
            "on" => $request->on,
            "abp" => $request->abp,
            "abn" => $request->abn,
            
        ]);
        if($blood_inventory){
            $blood_inventory = BloodInventory::all();
            return view('inventory.bloodstatus');
        }
    }

    public function index_newamount_update(Request $request)
    {
        $blood_inventory = BloodInventory::create([
            "hbid" => $request->hbid,
            "ap" => $request->ap,
            "an" => $request->an,
            "bp" => $request->bp,
            "bn" => $request->bn,
            "op" => $request->op,
            "on" => $request->on,
            "abp" => $request->abp,
            "abn" => $request->abn,
            
        ]);
        if($blood_inventory){
            $blood_inventory = BloodInventory::all();
            return Redirect::route('inventory.availability');
        }
    }

    public function viewanalysis()
    {
        $hospitals = Hospital::all();
        $bloodtypes = BloodType::all();
        $latestInventories = BloodInventory::join(DB::raw('
        (
            SELECT hbid, MAX(updated_at) as latest_time
            FROM blood_inventory
            GROUP BY hbid
        ) as latest'),
        function ($join) {
            $join->on('blood_inventory.hbid', '=', 'latest.hbid')
                ->on('blood_inventory.updated_at', '=', 'latest.latest_time');
        })
        ->select('blood_inventory.*')
        ->get();
        $provinces = DB::table('hospital')->select('province')->distinct()->pluck('province');
        $districts = DB::table('hospital')->select('district')->distinct()->pluck('district');

        return view('inventory.analysis',compact('hospitals','bloodtypes','latestInventories','provinces','districts'));
    }

}//
