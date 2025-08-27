<?php

namespace App\Models\Donation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model
{
    //
    use HasFactory;

    protected $table = "donations";

    protected $fillable = [
        "campID",
        "date",
        "nic",
        "btype",
        "bcomp",
        "amount",
        "expdate",
        "storelocation",
        "hbid",
    ];

    public $timestamps = true;
}

