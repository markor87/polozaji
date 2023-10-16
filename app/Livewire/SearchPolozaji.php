<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Polozaji;
use Carbon\Carbon;

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
                ->orWhere('sektor', 'like', '%' . $this->search . '%')
                ->orWhere('polozaj', 'like', '%' . $this->search . '%')
                ->orWhere('status', 'like', '%' . $this->search . '%')
                ->orWhere('ime_i_prezime', 'like', '%' . $this->search . '%')
                ->orWhere('status_konkursa', 'like', '%' . $this->search . '%');

            if (strtotime($this->search) !== false) {
                $query->orWhereDate('datum_postavljenja_na_polozaj', $this->search)
                    ->orWhereDate('datum_imenovanja_u_vd', $this->search);
            }

        }

        $polozaji = $query->orderBy('id')->paginate(10);

        return view('livewire.polozaji', ['polozaji' => $polozaji]);
    }


    public function updateSearch()
    {
        $this->resetPage();
    }
}

