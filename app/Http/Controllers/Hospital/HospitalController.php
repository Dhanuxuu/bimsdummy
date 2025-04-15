<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Hospital\BloodType;
use App\Models\Hospital\Hospital;
use App\Models\Hospital\BloodReq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class HospitalController extends Controller
{
    //
    public function create()
    {
        return view('hospital.create');
    }

    public function store(Request $request)
    {
        $hospital = Hospital::create([
            "regtype" => $request->regtype,
            "hbname" => $request->hbname,
            "hbid" => $request->hbid,
            "uname" => $request->uname,
            "district" => $request->district,
            "province" => $request->province,
            "email" => $request->email,
            "phone" => $request->phone,
            "hbaddress" => $request->hbaddress,
            
        ]);
        if($hospital){
            return Redirect::route("home")->with(['success' => 'Registered successfully!']);
        }
    }

    public function search()
    {
        $staffs = Hospital::all();
        return view('hospital.search',compact('staffs'));
    }

    public function requestBlood()
    {
        $banks = Hospital::select()->where('regtype','BloodBank')->get();
        $btypes = BloodType::all();
        $staff = Hospital::select()->where('email',Auth::user()->email)->first();
        return view('hospital.bloodreq',compact('banks','btypes','staff'));
    }

    public function requestBloodstore(Request $request)
    {
        $newRequest = BloodReq::create([
            "hbid" => $request->hbid,
            "bloodbank" => $request->bloodbank,
            "btype" => $request->btype,
            "amount" => $request->amount,
        ]);

        if($newRequest) {
            $requests = BloodReq::all();
            return view('hospital.viewbloodreq',compact('requests'));
        }


        // if ($newRequest) {
        //     // $reqs = BloodReq::whereIn('hbid', function ($query) {
        //     //     $query->select('hbid')
        //     //           ->from('hospital')
        //     //           ->where('donor_id', Auth::user()->email);
        //     // })->get();
        //     $banks = Hospital::select()->where('regtype','BloodBank')->get();
        //     $btypes = BloodType::all();
        //     $staff = Hospital::select()->where('email',Auth::user()->email)->first();
        //     $reqs = BloodReq::select()->where('hbid',Auth::user()->id)->get();
        //     return view('hospital.bloodreq',compact('banks','btypes','staff','reqs'));
        // }
    }

    public function viewrequestBlood()
    {
        $requests = BloodReq::all();
        return view('hospital.viewbloodreq',compact('requests'));
    }


}
