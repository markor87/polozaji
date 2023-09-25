<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojPostavljenihNaPolozaju;

class BrojPostavljenihNaPolozajuComponent extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojPostavljenihNaPolozaju::all();
    }

    public function render()
    {
        return view('livewire.broj-postavljenih-na-polozaju');
    }
}
