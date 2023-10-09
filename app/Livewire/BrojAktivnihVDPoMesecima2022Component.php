<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\BrojAktivnihVDPoMesecima2022;

class BrojAktivnihVDPoMesecima2022Component extends Component
{
    public $chartData;

    public function mount()
    {
        $data = BrojAktivnihVDPoMesecima2022::all();
        $months = $data->pluck('Јануар');
        $counts = $data->pluck('Број активних вд-а');

        $this->chartData = [
            'labels' => $months->toArray(),
            'values' => $counts->toArray()
        ];
    }

    public function render()
    {
        return view('livewire.broj-aktivnih-vd-po-mesecima-2022', [
            'chartData' => $this->chartData
        ]);
    }


}
