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
        $this->middleware('auth');
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
        return view('donationcamp');
    }

    public function index4()
    {
        return view('bloodeducation');
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
}
