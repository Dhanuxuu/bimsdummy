<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationCamp extends Model
{
    // 👇 Tell Laravel to use the correct table
    protected $table = 'donation_camp';

    protected $fillable = [
        'location',
        'organizer',
        's_date',
    ];
}
