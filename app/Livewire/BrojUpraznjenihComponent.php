<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojUpraznjenih;

class BrojUpraznjenihComponent extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojUpraznjenih::all();
    }

    public function render()
    {
        return view('livewire.broj-upraznjenih');
    }
}
