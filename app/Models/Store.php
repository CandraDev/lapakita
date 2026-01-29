<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * Get all of the credentials for the Store
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function credentials(): HasMany
    {
        return $this->hasMany(Credential::class);
    }
}
