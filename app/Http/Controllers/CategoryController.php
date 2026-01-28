<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache; // Add this line
use App\Models\Category; // Don't forget to import your Category model
use App\Models\SubCategory; // Don't forget to import your Category model


class CategoryController extends Controller
{
    public function getCategories()
    {
        // Cache the categories and subcategories for 60 minutes
        $categories = Cache::remember('categories_menu', 3600, function () {
            return Category::with(['subCategories.subSubCategories'])->get();
        });

        // Pass categories to the view
        return view('categories.index', compact('categories'));
    }


}
