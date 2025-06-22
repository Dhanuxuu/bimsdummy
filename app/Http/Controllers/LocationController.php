<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    private $provinces = [
        'Western' => ['Colombo', 'Gampaha', 'Kalutara'],
        'Central' => ['Kandy', 'Matale', 'Nuwara Eliya'],
        'Southern' => ['Galle', 'Matara', 'Hambantota'],
        'Northern' => ['Jaffna', 'Kilinochchi', 'Mannar', 'Vavuniya', 'Mullaitivu'],
        'Eastern' => ['Trincomalee', 'Batticaloa', 'Ampara'],
        'North Western' => ['Kurunegala', 'Puttalam'],
        'North Central' => ['Anuradhapura', 'Polonnaruwa'],
        'Uva' => ['Badulla', 'Monaragala'],
        'Sabaragamuwa' => ['Ratnapura', 'Kegalle']
    ];

    public function getProvinces()
    {
        return response()->json(array_keys($this->provinces));
    }

    public function getDistricts(Request $request)
    {
        $province = $request->province;
        if (isset($this->provinces[$province])) {
            return response()->json($this->provinces[$province]);
        }
        return response()->json([]);
    }

    public function getLocationData()
    {
        return response()->json($this->provinces);
    }
} 