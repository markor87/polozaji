<?php

namespace App\Livewire;

use App\Models\ProsecnoVremeTrajanjaKonkursaU2022;
use Livewire\Component;

class ProsecnoVremeTrajanjaKonkursaU2022Component extends Component
{

    public $data;

    public function mount()
    {
        $this->data=ProsecnoVremeTrajanjaKonkursaU2022::all();
    }

    public function render()
    {
        return view('livewire.prosecno-vreme-trajanja-konkursa-u-2022');
    }
}
