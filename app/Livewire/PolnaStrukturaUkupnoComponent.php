<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PolnaStrukturaUkupno;

class PolnaStrukturaUkupnoComponent extends Component
{
    public $chartData;
    public $tableData;

    public function mount()
    {
        $this->tableData = PolnaStrukturaUkupno::all();

        $ukupnoData = PolnaStrukturaUkupno::all('pol', 'ukupno');
        $this->chartData = [
            'labels' => $ukupnoData->pluck('pol')->toArray(),
            'values' => $ukupnoData->pluck('ukupno')->toArray()
        ];

    }

    public function render()
    {
        return view('livewire.polna-struktura-ukupno', [
            'data' => $this->tableData
        ]);
    }


}
