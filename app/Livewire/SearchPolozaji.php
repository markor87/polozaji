<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Polozaji;
use Livewire\WithPagination;

class SearchPolozaji extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        if (empty($this->search)) {
            $polozaji = Polozaji::paginate(10); // or any other number for pagination
        } else {
            $polozaji = Polozaji::where('id', 'like', '%' . $this->search . '%')
                ->orWhere('organ', 'like', '%' . $this->search . '%')
                ->orWhere('sektor', 'like', '%' . $this->search . '%')
                ->orderBy('id')
                ->paginate(10); // Apply pagination here as well
        }

        return view('livewire.search-polozaji', ['polozaji' => $polozaji]);
    }

    public function updateSearch()
    {
        $this->resetPage();
    }


}
