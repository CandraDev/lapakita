<?php

namespace App\Livewire\Secondary;

use Livewire\Component;

class SellerNavbar extends Component
{
    public $title;
    public $showActions;

    public function mount($title = null, $showActions = false)
    {
        $this->title = $title ?? __('Judul Default');
        $this->showActions = $showActions;
    }

    public function render()
    {
        return view('livewire.secondary.seller-navbar');
    }
}
