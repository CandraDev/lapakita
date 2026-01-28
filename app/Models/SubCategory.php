<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
