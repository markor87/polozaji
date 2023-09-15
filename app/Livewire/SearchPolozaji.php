<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Polozaji;

class SearchPolozaji extends Component
{
    public $search = '';

    public function render()
    {
        if (empty($this->search)) {
            $polozaji = Polozaji::paginate(10); // or any other number for pagination
        } else {
            $polozaji = Polozaji::where('id', 'like', '%' . $this->search . '%')->orWhere('organ', 'like', '%' . $this->search . '%')->orWhere('sektor', 'like', '%' . $this->search . '%')->orderBy('id')->get();
        }

        return view('livewire.search-polozaji', ['polozaji' => $polozaji]);
    }


    public function updateSearch()
    {

    }


}
