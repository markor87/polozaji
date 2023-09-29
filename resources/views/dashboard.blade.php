{{--<x-app-layout>--}}
{{--    <!-- <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--    </h2>--}}
{{--</x-slot> -->--}}

{{--    <!-- Main Dashboard Container -->--}}
{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}

{{--            <div class="flex space-x-4 mb-6">--}}

{{--                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                    @livewire('broj_aktivnih_polozaja-component')--}}
{{--                </div>--}}

{{--                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                    @livewire('broj_postavljenih_na_polozaju-component')--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="flex space-x-4 mb-6">--}}

{{--                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                    @livewire('broj_vd-component')--}}
{{--                </div>--}}

{{--                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                    @livewire('broj_upraznjenih-component')--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="flex space-x-4 mb-6">--}}

{{--                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                    @livewire('prosecno-vreme-trajanja-konkursa-u-toku-component')--}}
{{--                </div>--}}

{{--                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                    @livewire('prosecno-vreme-trajanja-konkursa-u-2022-component')--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="flex space-x-4 mb-6">--}}

{{--                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                    @livewire('broj-raspisanih-konkursa-u-toku-component')--}}
{{--                </div>--}}

{{--                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                    @livewire('broj-raspisanih-konkursa-u2023-component')--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="flex space-x-4 mb-6">--}}

{{--                <div class="w-1/2 bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                    @livewire('broj-raspisanih-konkursa-u2022-component')--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">--}}
{{--                @livewire('charts')--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}


<x-app-layout>
    <!-- Main Dashboard Container -->
    <div class="py-12 bg-gray-200 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Dashboard Title -->
            <h1 class="text-2xl font-bold mb-8">Dashboard Overview</h1>

            <!-- Dashboard Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-8">

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj_aktivnih_polozaja-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj_postavljenih_na_polozaju-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj_vd-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj_upraznjenih-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('prosecno-vreme-trajanja-konkursa-u-toku-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('prosecno-vreme-trajanja-konkursa-u-2022-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj-raspisanih-konkursa-u-toku-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj-raspisanih-konkursa-u2023-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj-raspisanih-konkursa-u2022-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj-zavrsenih-konkursa-u2023-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj-postavljenih-tokom-2023-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj-postavljenih-tokom-2022-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj-ponovo_postavljenih-tokom-2023-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj-ponovo_postavljenih-tokom-2022-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj-lica-nastavlja-rad-tokom-2023-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    @livewire('broj-lica-nastavlja-rad-tokom-2022-component')
                </div>

            </div>

            <!-- Charts Section -->
            <h2 class="text-xl font-semibold mb-4">Performance Charts</h2>
            <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition mb-6">
                @livewire('broj-aktivnih-vd-po-mesecima-2022-component')
            </div>

            <!-- Charts Section -->
            <h2 class="text-xl font-semibold mb-4">Performance Charts</h2>
            <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition mb-6">
                @livewire('charts')
            </div>

        </div>
    </div>
</x-app-layout>
