<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojZavrsenihKonkursaU2023;

class BrojZavrsenihKonkursaU2023Component extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojZavrsenihKonkursaU2023::all();
    }

    public function render()
    {
        return view('livewire.broj-zavrsenih-konkursa-u2023');
    }
}
