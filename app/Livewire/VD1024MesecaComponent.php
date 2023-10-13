<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VD1024Meseca;

class VD1024MesecaComponent extends Component
{
    public $chartData;
    public $tableData;

    public function mount()
    {
        $this->tableData = VD1024Meseca::all();

        $ukupnoData = VD1024Meseca::all('vrsta_organa', 'Број месеци', 'Број лица');
        $this->chartData = [
            'labels' => $ukupnoData->pluck('vrsta_organa')->toArray(),
            'values' => $ukupnoData->pluck('Број лица')->toArray()
        ];

    }

    public function render()
    {
        return view('livewire.vd-10-24-meseca', [
            'data' => $this->tableData
        ]);
    }


}
