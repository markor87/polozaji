<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Konkursi;
use Carbon\Carbon;

class SearchKonkursi extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $query = Konkursi::query();

        if (!empty($this->search)) {

            $query->where('id', 'like', '%' . $this->search . '%')
                ->orWhere('polozaji_id', 'like', '%' . $this->search . '%')
                ->orWhere('organ', 'like', '%' . $this->search . '%')
                ->orWhere('sektor', 'like', '%' . $this->search . '%')
                ->orWhere('broj_sednice', 'like', '%' . $this->search . '%')
                ->orWhere('broj_resenja_vss', 'like', '%' . $this->search . '%')
                ->orWhere('clan_komisije1', 'like', '%' . $this->search . '%')
                ->orWhere('clan_komisije2', 'like', '%' . $this->search . '%')
                ->orWhere('clan_komisije3', 'like', '%' . $this->search . '%')
                ->orWhere('broj_kandidata_u_postupku', 'like', '%' . $this->search . '%')
                ->orWhere('ime_i_prezime', 'like', '%' . $this->search . '%')
                ->orWhere('ukupno_trajanje', 'like', '%' . $this->search . '%')
                ->orWhere('status', 'like', '%' . $this->search . '%')
                ->orWhere('napomena', 'like', '%' . $this->search . '%');

            if (strtotime($this->search) !== false) {
                $query->orWhereDate('datum_objave', $this->search)
                    ->orWhereDate('datum_pregleda_prijava', $this->search)
                    ->orWhereDate('datum_ofk', $this->search)
                    ->orWhereDate('datum_pfk', $this->search)
                    ->orWhereDate('datum_pk', $this->search)
                    ->orWhereDate('datum_intervjua', $this->search)
                    ->orWhereDate('datum_slanja_dok_organu', $this->search)
                    ->orWhereDate('datum_predlaganja_kandidata_vladi', $this->search)
                    ->orWhereDate('datum_postavljenja', $this->search)
                    ->orWhereDate('datum_razresenja', $this->search);
            }
        }

        $konkursi = $query->orderBy('id', 'desc')->paginate(10);

        return view('livewire.konkursi', ['konkursi' => $konkursi]);
    }


    public function updateSearch()
    {
        $this->resetPage();
    }
}

