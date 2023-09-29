<?php

namespace App\Livewire;


use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\BrojAktivnihVDPoMesecima2022;

class BrojAktivnihVDPoMesecima2022Component extends Component
{
    public $data = [];

    public function mount()
    {

        $this->data = BrojAktivnihVDPoMesecima2022::all();

    }

    public function render()
    {
        return view('livewire.broj-aktivnih-vd-po-mesecima-2022', [
            'months' => $this->data->pluck('Јануар'),
            'counts' => $this->data->pluck('Број_активних_вд_а')
        ]);
    }


}
