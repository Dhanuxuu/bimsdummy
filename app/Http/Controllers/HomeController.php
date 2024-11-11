<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');allow access the navigation bar items with login
        $this->middleware('auth')->except(['index1', 'index2', 'index3','index4', 'index5', 'index6','index7', 'index8', 'index9','index10', 'index11', 'index12',
                                    'index14',]);//'index13',
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index1()
    {
        return view('bloodavailability');
    }

    public function index2()
    {
        return view('bloodbank');
    }

    public function index3()
    {
        return view('donation/donationcamp');
    }

    public function index4()
    {
        return view('education/bloodeducation');
    }

    public function index5()
    {
        return view('bloodeduadd');
    }

    public function index6()
    {
        return view('hospitalrequest');
    }

    public function index7()
    {
        return view('auditlog');
    }

    public function index8()
    {
        return view('adddonacamp');
    }

    public function index9()
    {
        return view('addbloodbank');
    }

    public function index10()
    {
        return view('updatebloodbank');
    }

    public function index11()
    {
        return view('delbloodbank');
    }

    public function index12()
    {
        return view('modification');
    }

    public function index13()
    {
        return view('auth/donoregister');
    }

    public function index14()
    {
        return view('bloodbank/bbinventory');
    }
}
