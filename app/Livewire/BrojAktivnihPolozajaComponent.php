<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojAktivnihPolozaja;

class BrojAktivnihPolozajaComponent extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojAktivnihPolozaja::all();
    }

    public function render()
    {
        return view('livewire.broj-aktivnih-polozaja');
    }
}
