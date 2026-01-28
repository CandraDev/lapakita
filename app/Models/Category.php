<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // Add this line to import HasMany

class Category extends Model
{
    protected $fillable = ['name', 'slug']; // Note the corrected fillable array (comma between fields)

    public function subCategories(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }
}
