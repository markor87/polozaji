<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Brisel1PoVrstiOrgana;

class Charts extends Component
{
public $chartData;
public $tableData;

public function mount()
{
$this->tableData = Brisel1PoVrstiOrgana::all();

$ukupnoData = Brisel1PoVrstiOrgana::where('vrsta_organa', 'Укупно')->first();

$this->chartData = [
'labels' => ['Постављен', 'Вршилац дужности', 'Упражњено'],
'values' => [$ukupnoData->postavljen, $ukupnoData->vrsilac_duznosti, $ukupnoData->upraznjeno]
];

}

public function render()
{
return view('livewire.charts', [
'data' => $this->tableData
]);
}


}
