<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Ambil categories dari JSON
        $json = file_get_contents(database_path('seeders/categories.json'));
        $categories = json_decode($json, true);

        foreach ($categories as $cat) {
            $category = Category::create([
                'name' => $cat['name'],
                'slug' => Str::slug($cat['name']),
            ]);

            if (!empty($cat['children'])) {
                foreach ($cat['children'] as $sub) {
                    // slug dengan category_id untuk unik
                    $subCategory = SubCategory::create([
                        'name' => $sub['name'],
                        'slug' => Str::slug($sub['name'].'-'.$category->id),
                        'category_id' => $category->id,
                    ]);

                    if (!empty($sub['children'])) {
                        foreach ($sub['children'] as $subsub) {
                            // slug dengan sub_category_id untuk unik
                            SubSubCategory::create([
                                'name' => $subsub['name'],
                                'slug' => Str::slug($subsub['name'].'-'.$subCategory->id),
                                'sub_category_id' => $subCategory->id,
                            ]);
                        }
                    }
                }
            }
        }

    }
}
