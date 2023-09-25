<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProsecnoVremeTrajanjaKonkursaUToku;

class ProsecnoVremeTrajanjaKonkursaUTokuComponent extends Component
{

    public $data;

    public function mount()
    {
        $this->data=ProsecnoVremeTrajanjaKonkursaUToku::all();
    }

    public function render()
    {
        return view('livewire.prosecno-vreme-trajanja-konkursa-u-toku');
    }
}
