<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Hospital\BloodType;
use App\Models\Hospital\DonationCamp;
use App\Models\Hospital\Hospital;
use App\Models\Hospital\BloodReq;
use App\Models\Inventory\BloodComponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\PseudoTypes\True_;

class HospitalController extends Controller
{
    //
    public function create()
    {
        $user = Auth::user();
        
        // Check if user is already registered as a hospital or blood bank
        $existingRegistration = Hospital::where('email', $user->email)->first();
        $isRegistered = $existingRegistration ? true : false;
        $registrationType = $isRegistered ? $existingRegistration->regtype : null;
        
        $accountType = null;
        
        if ($user) {
            // Assuming user model has a relationship or method to get the account type
            // Adjust this based on your actual user model structure
            $accountType = $user->account_type; // or however you determine the account type
        }
        
        $nextHospitalId = $this->getNextId('Hospital');
        $nextBloodBankId = $this->getNextId('BloodBank');
        
        return view('hospital.create', [
            'nextHospitalId' => $nextHospitalId,
            'nextBloodBankId' => $nextBloodBankId,
            'accountType' => $accountType,
            'isAuthenticated' => (bool) $user,
            'isRegistered' => $isRegistered,
            'registrationType' => $registrationType
        ]);
    }

    private function getNextId($type)
    {
        $prefix = $type === 'Hospital' ? 'H' : 'B';
        $lastRecord = Hospital::where('regtype', $type)
            ->orderBy('hbid', 'desc')
            ->first();

        if (!$lastRecord) {
            return $prefix . '01';
        }

        $lastNumber = (int) substr($lastRecord->hbid, 1);
        $nextNumber = $lastNumber + 1;
        return $prefix . str_pad($nextNumber, 2, '0', STR_PAD_LEFT);
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

    public function searchAjax(Request $request)
    {
        $search = $request->q;
        
        $hospitals = Hospital::where('hbname', 'like', '%'.$search.'%')
            ->orWhere('hbid', 'like', '%'.$search.'%')
            ->select('id', 'hbname as name', 'hbid as id')
            ->paginate(10);

        return response()->json([
            'data' => $hospitals->items(),
            'total' => $hospitals->total()
        ]);
    }

    public function requestBlood()
    {

        $banks = Hospital::select()->where('regtype','BloodBank')->get();
        $btypes = BloodType::all();
        $bcomponents = BloodComponent::all();
        $staff = Hospital::select()->where('email',Auth::user()->email)->first();
        return view('hospital.bloodreq',compact('banks','bcomponents','btypes','staff'));
    }

    public function requestBloodstore(Request $request)
    {
        $newRequest = BloodReq::create([
            "hbid" => $request->hbid,
            "bloodbank" => $request->bloodbank,
            "component" => $request->bcomponent,
            "btype" => $request->btype,
            "component" => $request->component,
            "amount" => $request->amount,
        ]);

        if($newRequest) {
            $requests = BloodReq::all();
            // return view('hospital.viewbloodreq',compact('requests')); due to duplicate submission
            return redirect()
        ->route('hospital.viewbloodreq')
        ->with('success', 'Blood request submitted successfully!');
        }
    }

    public function viewrequestBlood()
    {
        $requests = BloodReq::all();
        return view('hospital.viewbloodreq',compact('requests'));
    }

    public function donationCamp()
    {
        $banks = Hospital::select()->where('uname',Auth::user()->id)->first();
        return view('hospital.donationcamp',compact('banks'));
    }

    public function donationCampStore(Request $request)
    {
        $camp = DonationCamp::create([
            "s_date" => $request->s_date,
            "location" => $request->location,
            "hbid" => $request->hbid,
            
        ]);
        if($camp){
            $camps = DonationCamp::all();
            return view('welcome',compact('camps'));
        }
    }

    public function bloodrequpdate()
    {
        $requests = BloodReq::all();
        return view('hospital.bloodrequpdate',compact('requests'));
    }

    public function storeBloodrequpdate(Request $request,$id)
    {
        
        $record = BloodReq::find($id);
        $record->update($request->all());
        if($record){
            // $requests = BloodReq::all();
            // return view('',compact('requests'));
            return Redirect::route("hospital.bloodrequpdate");
        }
    }

}//
