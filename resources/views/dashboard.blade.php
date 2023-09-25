<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{--            {{ __('Dashboard') }}--}}
        </h2>
    </x-slot> -->

    <!-- Main Dashboard Container -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Row 1: Two charts side by side -->
            <div class="flex space-x-4 mb-6">

                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- First Livewire chart component -->
                    @livewire('broj_aktivnih_polozaja-component')
                </div>

                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- Second Livewire chart component or table -->
                    @livewire('broj_postavljenih_na_polozaju-component')
                </div>

            </div>

            <div class="flex space-x-4 mb-6">

                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- Second Livewire chart component or table -->
                    @livewire('broj_vd-component')
                </div>

                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- Second Livewire chart component or table -->
                    @livewire('broj_upraznjenih-component')
                </div>

            </div>

            <div class="flex space-x-4 mb-6">

                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- Second Livewire chart component or table -->
                    @livewire('prosecno-vreme-trajanja-konkursa-u-toku-component')
                </div>

                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- Second Livewire chart component or table -->
                    @livewire('prosecno-vreme-trajanja-konkursa-u-2022-component')
                </div>

            </div>

            <!-- Row 2: One table/chart -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">
                <!-- Third Livewire chart component or table -->
                @livewire('charts')
            </div>

        </div>
    </div>
</x-app-layout>
