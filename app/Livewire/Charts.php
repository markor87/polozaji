<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Brisel1PoVrstiOrgana;

class Charts extends Component
{
    public $chartData;

    public function mount()
    {
        $this->chartData = Brisel1PoVrstiOrgana::all();

//        $this->chartData['labels'] = $data->pluck('vrsta_organa')->toArray();
//        $this->chartData['labels'] = $data->pluck('postavljen')->toArray();
//        $this->chartData['labels'] = $data->pluck('vrsta_organa')->toArray();
//        $this->chartData['labels'] = $data->pluck('vrsta_organa')->toArray();
//        $this->chartData['labels'] = $data->pluck('vrsta_organa')->toArray();
//        $this->chartData['labels'] = $data->pluck('vrsta_organa')->toArray();
//        $this->chartData['labels'] = $data->pluck('vrsta_organa')->toArray();

//        $labels = $data->pluck('vrsta_organa')->toArray();
//        $labels = $data->pluck('postavljen')->toArray();
//        $labels = $data->pluck('procenat_postavljenih')->toArray();
//        $labels = $data->pluck('vrsilac_duznosti')->toArray();
//        $labels = $data->pluck('procenat_vd')->toArray();
//        $labels = $data->pluck('upraznjeno')->toArray();
//        $labels = $data->pluck('procenat_upraznjeno')->toArray();


    }

    public function render()
    {
        return view('livewire.Charts');
    }
}
