<x-app-layout>
    {{--<x-slot name="header">--}}
    {{--    <h2 class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">--}}
    {{--        {{ __('Ocene') }}--}}
    {{--    </h2>--}}
    {{--</x-slot>--}}
    <div class='container mx-auto p-6'>
        <div class='mb-4 w-1/3'><input type='text' placeholder='Search...'
                                       class='w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500'>
        </div>
        <table class='min-w-full bg-white'>
            <thead>
            <tr>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Action</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Ид</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Врста органа</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Орган</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Сектор</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Положај</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Статус</th>
                <th class='py-2 px-4 border-b border-gray-200 bg-gray-100 text-left'>Име и презиме</th>
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
                            <div @click="open = false"
                                 class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                 aria-hidden="true"></div>

                            <!-- Modal content -->
                            <div class="flex items-center justify-center min-h-screen">
                                <div
                                    class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                            Детаљи за ИД: {{ $polozaj->id }}
                                        </h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">
                                                Датум постављења на
                                                положај: {{ \Carbon\Carbon::parse($polozaj->datum_postavljenja_na_polozaj)->format('d-m-Y') }}

                                            </p>
                                            <p class="text-sm text-gray-500">
                                                Датум именовања у ВД: {{ \Carbon\Carbon::parse($polozaj->datum_imenovanja_u_vd)->format('d-m-Y') }}
                                            </p>
                                            <p class="text-sm text-gray-500">
                                                Име и презиме: {{ $polozaj->ime_i_prezime }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                        <button @click="open = false" type="button"
                                                class="bg-blue-500 text-white px-4 py-2 rounded">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->id }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->sifarnikVrstaOrgana->vrsta_organa }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->sifarnikOrgani->organ }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->sifarnikSektori->sektor }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->sifarnikPolozaj->polozaj }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->sifarnikStatusPolozaja->status }}</td>
                    <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->ime_i_prezime }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $polozaji->links() }}
        </div>
    </div>
</x-app-layout>
