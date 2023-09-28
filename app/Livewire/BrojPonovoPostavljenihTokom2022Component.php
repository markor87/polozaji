<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojPonovoPostavljenihTokom2022;

class BrojPonovoPostavljenihTokom2022Component extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojPonovoPostavljenihTokom2022::all();
    }

    public function render()
    {
        return view('livewire.broj-ponovo_postavljenih-tokom-2022');
    }
}
