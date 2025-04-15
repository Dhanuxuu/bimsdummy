<?php

namespace App\Models\Donor;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donor extends Model
{
    //
    use HasFactory;

    protected $table = "donors";

    protected $fillable = [
        "first_name",
        "last_name",
        "nic",
        "location",
        "donor_id",
        "contact_no",
        "gender",
        "dob",
        "blood_type",
        "weight",
        "diseases",
        
    ];

    public $timestamps = true;
}
