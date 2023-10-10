<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojDirektoraPomocnikaSluzbe;

class BrojDirektoraPomocnikaSluzbeComponent extends Component
{

    public $tableData;

    public function mount()
    {
        $this->tableData = BrojDirektoraPomocnikaSluzbe::all();
    }

    public function render()
    {
        return view('livewire.broj-direktora-pomocnika-sluzbe');
    }
}
