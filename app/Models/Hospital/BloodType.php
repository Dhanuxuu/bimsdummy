<?php

namespace App\Models\Hospital;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BloodType extends Model
{
    //
    use HasFactory;

    protected $table = "bloodtype";

    protected $fillable = [
        "name",
        
    ];

    public $timestamps = true;
}
