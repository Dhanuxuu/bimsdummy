<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use App\Models\Donation\Donation;
use Illuminate\Http\Request;
use App\Models\Hospital\BloodType;
use App\Models\Hospital\Hospital;
use Illuminate\Support\Facades\Auth;
use App\Models\Hospital\DonationCamp;
use Illuminate\Support\Facades\Redirect;

class DonationController extends Controller
{
    //
    public function addDonations(Request $request)
    {
        $donate = Donation::create([
            
            "campID" => $request->campID,
            "date" => $request->date,
            "nic" => $request->nic,
            "btype" => $request->btype,
            "bcomp" => $request->bcomp,
            "amount" => $request->amount,
            "expdate" => $request->expdate,
            "storelocation" => $request->storelocation,
            "hbid" => $request->hbid,
            
        ]);
        if($donate){
            // return view("inventory.availability")->with(['success' => 'Registered successfully!']);
            $users = $hospitalId = Hospital::where('uname', Auth::id())->value('id');
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

        return view('inventory.availability',compact('camps','btypes','ap','an','bp','bn','op','on','abp','abn'));
        }
    }

    // public function search()
    // {
    //     $donate = Donation::all();
    //     return view('hospital.search',compact('staffs'));
    // }

}
