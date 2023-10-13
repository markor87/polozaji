<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VD06Meseci;

class VD06MeseciComponent extends Component
{
    public $chartData;
    public $tableData;

    public function mount()
    {
        $this->tableData = VD06Meseci::all();

        $ukupnoData = VD06Meseci::all('vrsta_organa', 'Број месеци', 'Број лица');
        $this->chartData = [
            'labels' => $ukupnoData->pluck('vrsta_organa')->toArray(),
            'values' => $ukupnoData->pluck('Број лица')->toArray()
        ];

    }

    public function render()
    {
        return view('livewire.vd-0-6-meseci', [
            'data' => $this->tableData
        ]);
    }


}
