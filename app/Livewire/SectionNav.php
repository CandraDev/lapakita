<?php

namespace App\Livewire;

use Livewire\Component;

class SectionNav extends Component
{
    public array $tabs = [];

    public function render()
    {
        return view('livewire.section-nav');
    }
}
