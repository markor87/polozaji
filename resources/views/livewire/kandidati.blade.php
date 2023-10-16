<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <label>
        <input type="text" wire:model="search" wire:keydown="updateSearch"
               placeholder="Search Kandidati...">
    </label>

    <table class='min-w-full bg-white'>
        <thead>
        <tr>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Акција</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Ид</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Конкурс ИД</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Орган</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Сектор</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Име и презиме</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум пријаве</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Број пријаве</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Шифра кандидата</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Прихваћена пријава</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Жалба</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Сертификат рачунара</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Сертификат</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум накнадног тестирања ОФК</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>ОФК1</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>ОФК2</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>ОФК3</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум накнадног тестирања ПФК</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>ПФК</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум накнадног тестирања ПК</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>ПК</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Потпуна документација</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Мотивациони интервју</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>На листи</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Изабран кандидат</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Документација</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Напомена</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kandidati as $kandidat)
            <tr x-data="{ open: false }">
                <td class='py-2 px-4 border-b border-gray-200'>
                    <button @click="open = !open" class='bg-blue-500 text-white px-4 py-2 rounded'>
                        View
                    </button>
                </td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->id }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->konkurs_id }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->organ }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->sektor }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->ime_i_prezime }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->datum_prijave }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->broj_prijave }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->sifra_kandidata }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->prihvacena_prijava }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->zalba }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->sertifikat_racunara }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->sertifikat }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->datum_naknadnog_testiranja_ofk }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->ofk1 }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->ofk2 }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->ofk3 }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->datum_naknadnog_testiranja_pfk }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->pfk }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->datum_naknadnog_testiranja_pk }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->pk }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->potpuna_dokumentacija }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->motivacioni_intervju }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->na_listi }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->izabran_kandidat }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->datum_postavljenja_na_polozaj }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->dokumentacija }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $kandidat->napomena }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $kandidati->links() }}
    </div>
</div>

