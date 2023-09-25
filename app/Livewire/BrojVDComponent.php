<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojVD;

class BrojVDComponent extends Component
{

    public $data;

    public function mount()
    {
        $this->data=BrojVD::all();
    }

    public function render()
    {
        return view('livewire.broj-v-d');
    }
}
