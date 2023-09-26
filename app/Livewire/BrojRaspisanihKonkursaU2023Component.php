<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojRaspisanihKonkursaU2023;

class BrojRaspisanihKonkursaU2023Component extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojRaspisanihKonkursaU2023::all();
    }

    public function render()
    {
        return view('livewire.broj-raspisanih-konkursa-u2023');
    }
}
