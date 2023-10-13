<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VD79Meseci;

class VD79MeseciComponent extends Component
{
    public $chartData;
    public $tableData;

    public function mount()
    {
        $this->tableData = VD79Meseci::all();

        $ukupnoData = VD79Meseci::all('vrsta_organa', 'Од 7 до 9 месеци', 'Број лица');
        $this->chartData = [
            'labels' => $ukupnoData->pluck('vrsta_organa')->toArray(),
            'values' => $ukupnoData->pluck('Број лица')->toArray()
        ];

    }

    public function render()
    {
        return view('livewire.vd-7-9-meseci', [
            'data' => $this->tableData
        ]);
    }


}
