<?php

namespace App\Http\Controllers;

use App\Models\Admin\Education;
use App\Models\Admin\Gallery;
use App\Models\User;
use App\Models\Inventory\BloodInventory;
use App\Models\Hospital\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use File;

class AdminController extends Controller
{
    //
    public function education()
    {
        $educations = Education::all();
        return view('admin.education',compact('educations'));
    }

    public function storeeducation(Request $request)
    {
        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $nweducation = Education::create([
            "name" => $request->name,
            "description" => $request->description,
            "image" => $myimage,
        ]);
        if($nweducation){
            return Redirect::route('admin.education');
        }
    }

    public function deleteEducation($id){

        $education = Education::find($id);

        if(File::exists(public_path('assets/images/' . $education->image))){
            File::delete(public_path('assets/images/' . $education->image));
        }else{
            //('File does not exists.');
        }

        $education->delete();

        if($education){
            return Redirect::route("admin.education");
        }
    }

    public function gallery()
    {
        $photos = Gallery::all();
        return view('admin.gallery',compact('photos'));
    }

    public function storegallery(Request $request)
    {
        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $nwgallery = Gallery::create([
            "image" => $myimage,
        ]);
        if($nwgallery){
            return Redirect::route('admin.gallery');
        }
    }

    public function deleteGallery($id){

        $gallery = Gallery::find($id);

        if(File::exists(public_path('assets/images/' . $gallery->image))){
            File::delete(public_path('assets/images/' . $gallery->image));
        }else{
            //('File does not exists.');
        }

        $gallery->delete();

        if($gallery){
            return Redirect::route("admin.gallery");
        }
    }

    public function viewUsers()
    {
        $users = User::all();
        return view('admin.viewUsers',compact('users'));
    }

    public function storeUserRequpdate(Request $request, $id)
    {
        $record = User::findOrFail($id);
        $record->role = $request->role;
        $record->save();

        return redirect()->route("admin.viewUsers");
    }

    public function system_analysis()
    {
        $inventory = BloodInventory::all();
        $hospitals = Hospital::all();
        return view('admin.analysis',compact('inventory','hospitals'));
    }

    public function staff_update()
    {
        $hospitals = Hospital::all();
        return view('admin.staff_update',compact('hospitals'));
    }

    public function staff_update_store(Request $request, $id)
    {
        $request->validate([
        'uname' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        ]);

        $hospital = Hospital::findOrFail($id);
        $hospital->uname = $request->uname;
        $hospital->email = $request->email;
        $hospital->save();

        return redirect()->route("admin.staff_update");
    }
}
