<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    private $provinces = [
        'Western Province' => ['Colombo', 'Gampaha', 'Kalutara'],
        'Central Province' => ['Kandy', 'Matale', 'Nuwara Eliya'],
        'Southern Province' => ['Galle', 'Matara', 'Hambantota'],
        'Northern Province' => ['Jaffna', 'Kilinochchi', 'Mannar', 'Vavuniya', 'Mullaitivu'],
        'Eastern Province' => ['Trincomalee', 'Batticaloa', 'Ampara'],
        'North Western Province' => ['Kurunegala', 'Puttalam'],
        'North Central Province' => ['Anuradhapura', 'Polonnaruwa'],
        'Uva Province' => ['Badulla', 'Monaragala'],
        'Sabaragamuwa Province' => ['Ratnapura', 'Kegalle']
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