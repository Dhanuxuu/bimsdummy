<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class registerdonorController extends Controller
{
    //
    public function index() {
        $donor = DB::select('select * from donors');
        return view('home',['users'=>$donor]);
     }
}
