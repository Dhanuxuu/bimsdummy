<?php

namespace App\Models\Hospital;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DonationCamp extends Model
{
    //
    use HasFactory;

    protected $table = "donation_camp";

    protected $fillable = [
        // 
        "s_date",
        "location",
        "hbid",
    
    ];

    public $timestamps = true;

}
