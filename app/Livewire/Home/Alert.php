<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Alert extends Component
{
    public $show = true;  // visible by default
    public $message;
    public $type;

    // Method untuk dismiss hanya alert ini
    public function dismiss()
    {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.home.alert');
    }
}
