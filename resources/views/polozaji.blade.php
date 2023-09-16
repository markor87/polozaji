<x-app-layout xmlns:wire="http://www.w3.org/1999/xhtml">
    {{--<x-slot name="header">--}}
    {{--    <h2 class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">--}}
    {{--        {{ __('Polozaji') }}--}}
    {{--    </h2>--}}
    {{--</x-slot>--}}
    <div class='container mx-auto p-6'>
{{--        <div class='mb-4 w-1/3'><input type='text' id="searchInput" placeholder='Search...'--}}
{{--                                       class='w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500'>--}}
{{--        </div>--}}
        @livewire('search-polozaji')
        <div>
            Showing {{ $polozaji->firstItem() }} to {{ $polozaji->lastItem() }} of {{ $polozaji->total() }} results
        </div>
    </div>

</x-app-layout>
