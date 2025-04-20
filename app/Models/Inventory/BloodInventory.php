<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BloodInventory extends Model
{
    //
    use HasFactory;

    protected $table = "blood_inventory";

    protected $fillable = [
        "hbid",
        "ap",
        "an",
        "bp",
        "bn",
        "op",
        "on",
        "abp",
        "abn",
        
    ];

    public $timestamps = true;

}