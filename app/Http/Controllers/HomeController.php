<?php

namespace App\Http\Controllers;

use App\Models\Admin\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Donor\Donor;
use App\Models\Hospital\Hospital;
use App\Models\Donation\Donation;
use App\Models\DonationCamp;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showWelcome()
{
    $camps = DonationCamp::orderBy('s_date')->get();
    return view('welcome', compact('camps'));
}
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $donor = Donor::select()->where('donor_id',Auth::user()->email)->first();
        $staff = Hospital::select()->where('uname',Auth::user()->id)->first();
        // $donor = Donor::find($id);
        if($donor){
            $donations = Donation::all();
            return view('home',compact('donor','donations'));
        }elseif($staff){
            return view('home',compact('staff'));
        }else{
            return view('home');
        }
    }

    public function education()
    {
        $education = Education::all();
        return view('guest.blood-education',compact('education'));
    }

    
}
