<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Category;


class Navbar extends Component
{
    public $categories;       // All categories
    public $selectedCategory; // Selected category
    public $subCategories = []; // Subcategories for the selected category

    // Load categories and subcategories
    public function mount()
    {
        // Get all categories and eager load subcategories
        $this->categories = Category::with('subCategories')->get();

        // Set default category as "Elektronik" (or based on its name)
        $defaultCategory = Category::where('name', 'Elektronik')->first();

        // If "Elektronik" is found, set it as the selected category and load its subcategories
        if ($defaultCategory) {
            $this->selectedCategory = $defaultCategory->id;
            $this->subCategories = $defaultCategory->subCategories;
        }
    }

    // Handle category selection
    public function selectCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;

        // Get the subcategories for the selected category as a collection
        $this->subCategories = Category::find($categoryId)->subCategories;

        // If no subcategories, return an empty collection
        if ($this->subCategories->isEmpty()) {
            $this->subCategories = collect();
        }
    }

    public function render()
    {
        return view('livewire.home.navbar.container');
    }

}
