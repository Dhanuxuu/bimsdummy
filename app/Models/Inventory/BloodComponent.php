<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class BloodComponent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bloodComponents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'component'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
