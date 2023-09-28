<?php

namespace App\Livewire;

use App\Models\BrojLicaNastavljaRadTokom2022;
use Livewire\Component;

class BrojLicaNastavljaRadTokom2022Component extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojLicaNastavljaRadTokom2022::all();
    }

    public function render()
    {
        return view('livewire.broj-lica-nastavlja-rad-tokom-2022');
    }
}
