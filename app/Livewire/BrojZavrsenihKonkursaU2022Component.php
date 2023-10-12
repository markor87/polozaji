<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojZavrsenihKonkursaU2022;

class BrojZavrsenihKonkursaU2022Component extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojZavrsenihKonkursaU2022::all();
    }

    public function render()
    {
        return view('livewire.broj-zavrsenih-konkursa-u2022');
    }
}
