<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache; // Add this line
use App\Models\Category; // Don't forget to import your Category model
use App\Models\SubCategory; // Don't forget to import your Category model
use App\Models\Province; // Don't forget to import your Category model
use App\Models\Regency; // Don't forget to import your Category model
use App\Models\District; // Don't forget to import your Category model


class UtilityController extends Controller
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

    public function regencies(Province $province)
    {
        return response()->json(
            $province->regencies()
            ->select('regencies.*')
            ->distinct()
            ->orderBy('name', 'desc')
            ->get()
        );
    }

    public function districts(Regency $regency)
    {
        return response()->json(
            $regency->districts()
            ->select('districts.*')
            ->distinct()
            ->orderBy('name', 'desc')
            ->get()
        );
    }

    public function villages(District $district)
    {
        return response()->json(
            $district->villages()
            ->select('villages.*')
            ->distinct()
            ->orderBy('name', 'desc')
            ->get()
        );
    }
}
