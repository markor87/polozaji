<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojDirektoraPomocnikaUprave;

class BrojDirektoraPomocnikaUpraveComponent extends Component
{

    public $tableData;

    public function mount()
    {
        $this->tableData = BrojDirektoraPomocnikaUprave::all();
    }

    public function render()
    {
        return view('livewire.broj-direktora-pomocnika-uprave');
    }
}
