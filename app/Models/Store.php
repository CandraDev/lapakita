<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
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
