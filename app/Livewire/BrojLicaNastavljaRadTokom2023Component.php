<?php

namespace App\Livewire;

use App\Models\BrojLicaNastavljaRadTokom2023;
use Livewire\Component;

class BrojLicaNastavljaRadTokom2023Component extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojLicaNastavljaRadTokom2023::all();
    }

    public function render()
    {
        return view('livewire.broj-lica-nastavlja-rad-tokom-2023');
    }
}
