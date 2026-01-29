<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'address_id',
        'credential_id',
        'main_category_id',
        'store_verified_at',
    ];

    protected function casts(): array
    {
        return [
            'store_verified_at' => 'datetime',
        ];
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
