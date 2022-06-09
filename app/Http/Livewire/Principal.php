<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Principal extends Component
{
    public function render()
    {
        return view('livewire.principal')->layout("layouts.base");
    }
}
