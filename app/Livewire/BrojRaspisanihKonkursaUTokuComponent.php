<?php

namespace App\Livewire;

use App\Models\BrojRaspisanihKonkursaUToku;
use Livewire\Component;

class BrojRaspisanihKonkursaUTokuComponent extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojRaspisanihKonkursaUToku::all();
    }

    public function render()
    {
        return view('livewire.broj-raspisanih-konkursa-u-toku');
    }
}
