<?php

namespace App\Http\Controllers\Donor;

use App\Http\Controllers\Controller;
use App\Models\Donor\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DonorController extends Controller
{
    //
    public function create()
    {
        return view('donor.create');
    }

    public function store(Request $request)
    {
        $donors = Donor::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "nic" => $request->nic,
            "location" => $request->location,
            "donor_id" => $request->donor_id,
            "contact_no" => $request->contact_no,
            "gender" => $request->gender,
            "dob" => $request->dob,
            "blood_type" => $request->blood_type,
            "weight" => $request->weight,
            "diseases" => $request->diseases,
        
        ]);
        if($donors){
            return Redirect::route("home")->with(['success' => 'Registered successfully!']);
        }
    }


}
