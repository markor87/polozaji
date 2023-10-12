<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojObjavljenihKonkursaPoMesecima;

class BrojObjavljenihKonkursaU2023Component extends Component
{
    public $chartData;

    public function mount()
    {
        $data = BrojObjavljenihKonkursaPoMesecima::where('godina', 2023)->orderBy('mesec_u_godini', 'asc')->get();
        $mesec = $data->pluck('mesec');
        $broj = $data->pluck('broj_konkursa');

        $this->chartData = [
            'labels' => $mesec->toArray(),
            'values' => $broj->toArray()
        ];
    }


    public function render()
    {
        return view('livewire.broj-objavljenih_konkursa_po_mesecima-2023');
    }


}
