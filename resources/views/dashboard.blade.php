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

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold mb-4">Број директора и помоћника директора у управама</h2>
                    @livewire('broj-direktora-pomocnika-uprave-component')
                </div>

                <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold mb-4">Број директора и помоћника директора у службама Владе</h2>
                    @livewire('broj-direktora-pomocnika-sluzbe-component')
                </div>

            </div>

            <!-- Charts Section -->
            <h2 class="text-xl font-semibold mb-4">Број ВД-а по месецима 2022.</h2>
            <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition mb-6">
                @livewire('broj-aktivnih-vd-po-mesecima-2022-component')
            </div>

            <!-- Charts Section -->
            <h2 class="text-xl font-semibold mb-4">Број ВД-а по месецима 2023.</h2>
            <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition mb-6">
                @livewire('broj-aktivnih-vd-po-mesecima-2023-component')
            </div>

            <!-- Charts Section -->
            <h2 class="text-xl font-semibold mb-4">Статус ДС по врсти органа</h2>
            <div class="bg-white p-5 rounded-lg shadow hover:shadow-lg transition mb-6">
                @livewire('charts')
            </div>

        </div>
    </div>
</x-app-layout>

{{--<x-app-layout>--}}
{{--    <!-- Main Dashboard Container -->--}}
{{--    <div class="bg-gray-200 min-h-screen p-4 md:p-12">--}}
{{--        <div class="max-w-7xl mx-auto">--}}

{{--            <!-- Dashboard Title -->--}}
{{--            <h1 class="text-2xl font-bold mb-8">Dashboard Overview</h1>--}}

{{--            <!-- Dashboard Cards -->--}}
{{--            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">--}}
{{--                <!-- Reusable Card Component -->--}}
{{--                <x-card title="Active Positions">--}}
{{--                    @livewire('broj_aktivnih_polozaja-component')--}}
{{--                </x-card>--}}
{{--                <!-- ... Repeat for other cards ... -->--}}
{{--            </div>--}}

{{--            <!-- Charts Section -->--}}
{{--            <div class="mb-8">--}}
{{--                <x-chart-section title="Monthly VD Count 2022">--}}
{{--                    @livewire('broj-aktivnih-vd-po-mesecima-2022-component')--}}
{{--                </x-chart-section>--}}

{{--                <x-chart-section title="Monthly VD Count 2023">--}}
{{--                    @livewire('broj-aktivnih-vd-po-mesecima-2023-component')--}}
{{--                </x-chart-section>--}}

{{--                <x-chart-section title="DS Status by Organ Type">--}}
{{--                    @livewire('charts')--}}
{{--                </x-chart-section>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
