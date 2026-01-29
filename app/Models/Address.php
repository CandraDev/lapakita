<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id',
        'province_id',
        'regency_id',
        'district_id',
        'village_id',
        'address',
        'type',
        'drop_point',
        'is_default',
    ];
}
