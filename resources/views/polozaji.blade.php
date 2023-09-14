<x-app-layout>
{{--<x-slot name="header">--}}
{{--    <h2 class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">--}}
{{--        {{ __('Ocene') }}--}}
{{--    </h2>--}}
{{--</x-slot>--}}
<div class='container mx-auto p-6'>
    <div class='mb-4 w-1/3'> <input type='text' placeholder='Search...'
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
        </tr>
        </thead>
        <tbody>
        @foreach($polozaji as $polozaj)
        <tr>
            <td class='py-2 px-4 border-b border-gray-200'>
                <button class='bg-blue-500 text-white px-4 py-2 rounded'>View</button>
            </td>
            <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->id }}</td>
            <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->sifarnikVrstaOrgana->vrsta_organa }}</td>
            <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->sifarnikOrgani->organ }}</td>
            <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->sifarnikSektori->sektor }}</td>
            <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->sifarnikPolozaj->polozaj }}</td>
            <td class='py-2 px-4 border-b border-gray-200'>{{ $polozaj->sifarnikStatusPolozaja->status }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $polozaji->links() }}
    </div>
</div>
    </x-app-layout>
