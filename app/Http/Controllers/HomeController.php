<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Donor\Donor;
use App\Models\Hospital\Hospital;


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
            return view('home',compact('donor'));
        }elseif($staff){
            return view('home',compact('staff'));
        }else{
            return view('home');
        }
    }
}
