<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Polozaji;

class SearchPolozaji extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $query = Polozaji::query();

        if (!empty($this->search)) {
            $query->where('id', 'like', '%' . $this->search . '%')
                ->orWhere('organ', 'like', '%' . $this->search . '%')
                ->orWhere('sektor', 'like', '%' . $this->search . '%');
        }

        $polozaji = $query->orderBy('id')->paginate(10);
//        dd($this->search, $polozaji->lastItem(), $polozaji->total());

        return view('livewire.search-polozaji', ['polozaji' => $polozaji]);
    }


    public function updateSearch()
    {
        $this->resetPage();
    }
}

