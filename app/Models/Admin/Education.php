<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Education extends Model
{
    
    use HasFactory;

    protected $table = "education";

    protected $fillable = [
        "name",
        "description",
        "image",

    ];

    public $timestamps = true;
}
