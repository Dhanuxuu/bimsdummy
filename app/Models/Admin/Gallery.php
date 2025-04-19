<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    //
    use HasFactory;

    protected $table = "galleries";

    protected $fillable = [
        "image",

    ];

    public $timestamps = true;
}
