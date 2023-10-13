<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VD2548Meseci;

class VD2548MeseciComponent extends Component
{
    public $chartData;
    public $tableData;

    public function mount()
    {
        $this->tableData = VD2548Meseci::all();

        $ukupnoData = VD2548Meseci::all('vrsta_organa', 'Од 25 до 48 месеци', 'Број лица');
        $this->chartData = [
            'labels' => $ukupnoData->pluck('vrsta_organa')->toArray(),
            'values' => $ukupnoData->pluck('Број лица')->toArray()
        ];

    }

    public function render()
    {
        return view('livewire.vd-25-48-meseci', [
            'data' => $this->tableData
        ]);
    }


}
