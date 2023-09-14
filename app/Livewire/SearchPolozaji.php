<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Polozaji;

class SearchPolozaji extends Component
{
    public $search = '';
//    protected $layout = 'components.layouts.app';

    public function render()
    {

        $polozaji = [];

        if (!empty($this->search)) {
            $polozaji = Polozaji::where('id', 'like', '%' . $this->search . '%')->get();
        }
        return view('livewire.search-polozaji', ['polozaji' => $polozaji]);
    }
}
