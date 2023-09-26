<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojRaspisanihKonkursaU2022;

class BrojRaspisanihKonkursaU2022Component extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojRaspisanihKonkursaU2022::all();
    }

    public function render()
    {
        return view('livewire.broj-raspisanih-konkursa-u2022');
    }
}
