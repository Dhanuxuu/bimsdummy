<?php

namespace App\Models\Hospital;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hospital extends Model
{
    //
    use HasFactory;

    protected $table = "hospital";

    protected $fillable = [
        "regtype",
        "hbname",
        "hbid",
        "uname",
        "district",
        "province",
        "email",
        "phone",
        "hbaddress",
        
    ];

    public $timestamps = true;
}
