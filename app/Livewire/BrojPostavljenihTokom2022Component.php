<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojPostavljenihTokom2022;

class BrojPostavljenihTokom2022Component extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojPostavljenihTokom2022::all();
    }

    public function render()
    {
        return view('livewire.broj-postavljenih-tokom-2022');
    }
}
