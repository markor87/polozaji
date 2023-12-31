<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <label>
        <input type="text" wire:model="search" wire:keydown="updateSearch"
               placeholder="Search Konkursi...">
    </label>
    <table class='min-w-full bg-white'>
        <thead>
        <tr>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Акција</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Ид</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Положај ИД</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Орган</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Сектор</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум објаве</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Број седнице</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Број решења ВСС</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Члан комисије 1</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Члан комисије 2</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Члан комисије 3</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Број пријава</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум прегледа пријава</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Број кандидата у поступку</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум ОФК</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум ПФК</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум ПК</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум интервјуа</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум слања докумената органу</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум предлагања кандидата Влади</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Име и презиме</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум постављења</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум разрешења</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Укупно трајање</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Статус</th>
            <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Напомена</th>
        </tr>
        </thead>
        <tbody>
        @foreach($konkursi as $konkurs)
            <tr x-data="{ open: false }">
                <td class='py-2 px-4 border-b border-gray-200'>
                    <button @click="open = !open" class='bg-blue-500 text-white px-4 py-2 rounded'>
                        View
                    </button>
                    <!-- Modal code -->
                    <div x-show="open" class="fixed z-10 inset-0 overflow-y-auto">
                        <!-- Background overlay -->
                        <div @click="open = false"
                             class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                             aria-hidden="true"></div>
                        <!-- Modal content -->
                        <div class="flex items-center justify-center">
                            <div
                                    class="bg-white rounded-lg overflow-y-auto shadow-xl transform transition-all w-full sm:max-w-full sm:w-full">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900"
                                        id="modal-title">
                                        Детаљи о кандидатима за конкурс:
                                        {{--                                                        {{ $polozaj->organ }}--}}
                                        {{--                                                        - {{ $polozaj->sektor }}--}}
                                        {{--                                                        - {{ $polozaj->polozaj }}--}}
                                    </h3>
                                    <div class="mt-2">
                                        <!-- Displaying Konkursi for the Polozaj in Table Format -->
                                        <h4 class="text-lg leading-6 font-medium text-gray-900 mt-4">
                                            Кандидати:
                                        </h4>
                                        <table
                                                class="min-w-full mt-2 border-collapse border border-gray-300">
                                            <thead>
                                            <tr>
                                                <th class="border border-gray-300 px-4 py-2">Ид
                                                    конкурса
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Положај
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Датум
                                                    објаве
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Број
                                                    седнице
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Број
                                                    решења ВСС
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Члан
                                                    комисије 1
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Члан
                                                    комисије 2
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Члан
                                                    комисије 3
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Број
                                                    пријава
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Датум
                                                    прегледа пријава
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Број
                                                    кандидата у поступку
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Датум
                                                    ОФК
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Датум
                                                    ПФК
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Датум
                                                    ПК
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Датум
                                                    интервјуа
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Датум
                                                    слања документације органу
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Датум
                                                    предлаганја кандидата Влади
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Име и
                                                    презиме
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Датум
                                                    постављења
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Датум
                                                    разрешења
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">Укупно
                                                    трајање
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">
                                                    Статус
                                                </th>
                                                <th class="border border-gray-300 px-4 py-2">
                                                    Напомена
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($konkurs->kandidati as $kandidat)
                                                <tr>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $kandidat->id }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->datum_objave }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->broj_sednice }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->broj_resenja_vss }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->clan_komisije1 }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->clan_komisije2 }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->clan_komisije3 }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->broj_prijava }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->datum_pregleda_prijava }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->broj_kandidata_u_postupku }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->datum_ofk }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->datum_pfk }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->datum_pk }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->datum_intervjua }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->datum_slanja_dok_organu }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->datum_predlaganja_kandidata_vladi }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->ime_i_prezime }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->datum_postavljenja }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->datum_razresenja }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->ukupno_trajanje }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->status }}
                                                    </td>
                                                    <td class="border border-gray-300 px-4 py-2">{{
                                          $konkurs->napomena }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div
                                        class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                    <button @click="open = false" type="button"
                                            class="bg-blue-500 text-white px-4 py-2 rounded">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->id }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->polozaji_id }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->organ }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->sektor }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->datum_objave }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->broj_sednice }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->broj_resenja_vss }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->clan_komisije1 }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->clan_komisije2 }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->clan_komisije3 }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->broj_prijava }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->datum_pregleda_prijava }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->broj_kandidata_u_postupku }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->datum_ofk }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->datum_pfk }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->datum_pk }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->datum_intervjua }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->datum_slanja_dok_organu }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->datum_predlaganja_kandidata_vladi }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->ime_i_prezime }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->datum_postavljenja }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->datum_razresenja }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->ukupno_trajanje }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->status }}</td>
                <td class='py-2 px-4 border-b border-gray-200'>{{ $konkurs->napomena }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $konkursi->links() }}
    </div>
</div>