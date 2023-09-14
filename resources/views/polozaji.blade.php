<x-app-layout>
    {{--<x-slot name="header">--}}
    {{--    <h2 class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">--}}
    {{--        {{ __('Ocene') }}--}}
    {{--    </h2>--}}
    {{--</x-slot>--}}
    <div class='container mx-auto p-6'>
        <div class='mb-4 w-1/3'><input type='text' id="searchInput" placeholder='Search...'
                                       class='w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500'>
        </div>

        <table class='min-w-full bg-white'>
            @livewire('search-polozaji')
            <thead>
            <tr>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Action</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Ид</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Врста органа</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Орган</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Сектор</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Положај</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Статус</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум постављења на положај</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Датум именовања у ВД</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Име и презиме</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Статус конкурса</th>
            </tr>
            </thead>
            <tbody>
            @foreach($polozaji as $polozaj)
                <tr x-data="{ open: false }">
                    <td class='py-2 px-4 border-b border-gray-200'>
                        <button @click="open = !open" class='bg-blue-500 text-white px-4 py-2 rounded'>View</button>

                        <!-- Modal code -->
                        <div x-show="open" class="fixed z-10 inset-0 overflow-y-auto">
                            <!-- Background overlay -->
                            <div @click="open = false" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                            <!-- Modal content -->
                            <!-- Modal content -->
                            <div class="flex items-center justify-center">
                                <div class="bg-white rounded-lg overflow-y-auto shadow-xl transform transition-all w-full sm:max-w-2xl sm:w-full">
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                            Детаљи о конкурсу за положај: {{ $polozaj->organ }} - {{ $polozaj->sektor }} - {{ $polozaj->polozaj }}
                                        </h3>
                                        <div class="mt-2">
                                            <!-- Displaying Konkursi for the Polozaj in Table Format -->
                                            <h4 class="text-lg leading-6 font-medium text-gray-900 mt-4">
                                                Конкурси:
                                            </h4>
                                            <table class="min-w-full mt-2 border-collapse border border-gray-300">
                                                <thead>
                                                <tr>
                                                    <th class="border border-gray-300 px-4 py-2">Ид</th>
                                                    <th class="border border-gray-300 px-4 py-2">Положај</th>
                                                    <!-- ... other headers ... -->
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($polozaj->konkursi as $konkurs)
                                                    <tr>
                                                        <td class="border border-gray-300 px-4 py-2">{{ $konkurs->id }}</td>
                                                        <td class="border border-gray-300 px-4 py-2">{{ $konkurs->polozaji_id }}</td>
                                                        <!-- ... other columns ... -->
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                        <button @click="open = false" type="button" class="bg-blue-500 text-white px-4 py-2 rounded">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </td>

                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->id }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->vrsta_organa }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->organ }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->sektor }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->polozaj }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->status }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->datum_postavljenja_na_polozaj }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->datum_imenovanja_u_vd }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->ime_i_prezime }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->status_konkursa }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $polozaji->links() }}
        </div>
    </div>

</x-app-layout>
