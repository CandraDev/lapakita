<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Credential extends Model
{
    protected $fillable = [
        'user_id',
        'store_id',
        'type',
        'credential_image',
    ];

    /**
     * Get the store that owns the Credential
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }
}
