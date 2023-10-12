<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BrojLicaPoMesecima;

class BrojLicaPoMesecimaComponent extends Component
{
    public $chartData;
    public $tableData;

    public function mount()
    {
        $this->tableData = BrojLicaPoMesecima::all();

        $ukupnoData = BrojLicaPoMesecima::all('Број месеци', 'Број лица');
        $this->chartData = [
            'labels' => $ukupnoData->pluck('Број месеци')->toArray(),
            'values' => $ukupnoData->pluck('Број лица')->toArray()
        ];

    }

    public function render()
    {
        return view('livewire.broj-lica-po-mesecima', [
            'data' => $this->tableData
        ]);
    }


}
