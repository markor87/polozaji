<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VD49PlusMeseci;

class VD49PlusMeseciComponent extends Component
{
    public $chartData;
    public $tableData;

    public function mount()
    {
        $this->tableData = VD49PlusMeseci::all();

        $ukupnoData = VD49PlusMeseci::all('vrsta_organa', 'Више од 49 месеци', 'Број лица');
        $this->chartData = [
            'labels' => $ukupnoData->pluck('vrsta_organa')->toArray(),
            'values' => $ukupnoData->pluck('Број лица')->toArray()
        ];

    }

    public function render()
    {
        return view('livewire.vd-49plus-meseci', [
            'data' => $this->tableData
        ]);
    }


}
