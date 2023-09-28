<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojPostavljenihTokom2023;

class BrojPostavljenihTokom2023Component extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojPostavljenihTokom2023::all();
    }

    public function render()
    {
        return view('livewire.broj-postavljenih-tokom-2023');
    }
}
