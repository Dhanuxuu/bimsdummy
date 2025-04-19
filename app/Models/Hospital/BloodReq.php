<?php

namespace App\Models\Hospital;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BloodReq extends Model
{
    //
    use HasFactory;

    protected $table = "bloodreq";

    protected $fillable = [
        // "name",
        "hbid",
        "bloodbank",
        "btype",
        "amount",
        "status",
        "remark",
    ];

    public $timestamps = true;
}
