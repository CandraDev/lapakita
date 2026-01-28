<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // Add this line to import HasMany


class SubCategory extends Model
{
    protected $fillable = ['name', 'category_id', 'slug'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function subSubCategories(): HasMany
    {
        return $this->hasMany(SubSubCategory::class);
    }
}
