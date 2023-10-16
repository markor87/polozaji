<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Kandidati;
use Carbon\Carbon;

class SearchKandidati extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $query = Kandidati::query();

        if (!empty($this->search)) {

            $query->where('id', 'like', '%' . $this->search . '%')
                ->orWhere('konkurs_id', 'like', '%' . $this->search . '%')
                ->orWhere('organ', 'like', '%' . $this->search . '%')
                ->orWhere('sektor', 'like', '%' . $this->search . '%')
                ->orWhere('ime_i_prezime', 'like', '%' . $this->search . '%')
                ->orWhere('broj_prijave', 'like', '%' . $this->search . '%')
                ->orWhere('sifra_kandidata', 'like', '%' . $this->search . '%')
                ->orWhere('prihvacena_prijava', 'like', '%' . $this->search . '%')
                ->orWhere('zalba', 'like', '%' . $this->search . '%')
                ->orWhere('sertifikat_racunara', 'like', '%' . $this->search . '%')
                ->orWhere('ofk1', 'like', '%' . $this->search . '%')
                ->orWhere('ofk2', 'like', '%' . $this->search . '%')
                ->orWhere('ofk3', 'like', '%' . $this->search . '%')
                ->orWhere('pfk', 'like', '%' . $this->search . '%')
                ->orWhere('pk', 'like', '%' . $this->search . '%')
                ->orWhere('potpuna_dokumentacija', 'like', '%' . $this->search . '%')
                ->orWhere('motivacioni_intervju', 'like', '%' . $this->search . '%')
                ->orWhere('na_listi', 'like', '%' . $this->search . '%')
                ->orWhere('izabran_kandidat', 'like', '%' . $this->search . '%')
                ->orWhere('dokumentacija', 'like', '%' . $this->search . '%')
                ->orWhere('napomena', 'like', '%' . $this->search . '%');

            if (strtotime($this->search) !== false) {
                $query->orWhereDate('datum_prijave', $this->search)
                    ->orWhereDate('datum_naknadnog_testiranja_ofk', $this->search)
                    ->orWhereDate('datum_naknadnog_testiranja_pfk', $this->search)
                    ->orWhereDate('datum_naknadnog_testiranja_pk', $this->search)
                    ->orWhereDate('datum_postavljenja_na_polozaj', $this->search);
            }
        }

        $kandidati = $query->orderBy('id', 'desc')->paginate(10);

        return view('livewire.kandidati', ['kandidati' => $kandidati]);
    }


    public function updateSearch()
    {
        $this->resetPage();
    }
}

