<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojPonovoPostavljenihTokom2023;

class BrojPonovoPostavljenihTokom2023Component extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojPonovoPostavljenihTokom2023::all();
    }

    public function render()
    {
        return view('livewire.broj-ponovo_postavljenih-tokom-2023');
    }
}
