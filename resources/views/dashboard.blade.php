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
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Row 1 -->
            <div class="flex flex-wrap -mx-2 mb-6">
                <div class="w-full sm:w-1/2 px-2 mb-4 sm:mb-0">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('broj_aktivnih_polozaja-component')
                    </div>
                </div>
                <div class="w-full sm:w-1/2 px-2">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('broj_postavljenih_na_polozaju-component')
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="flex flex-wrap -mx-2 mb-6">
                <div class="w-full sm:w-1/2 px-2 mb-4 sm:mb-0">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('broj_vd-component')
                    </div>
                </div>
                <div class="w-full sm:w-1/2 px-2">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('broj_upraznjenih-component')
                    </div>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="flex flex-wrap -mx-2 mb-6">
                <div class="w-full sm:w-1/2 px-2 mb-4 sm:mb-0">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('prosecno-vreme-trajanja-konkursa-u-toku-component')
                    </div>
                </div>
                <div class="w-full sm:w-1/2 px-2">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('prosecno-vreme-trajanja-konkursa-u-2022-component')
                    </div>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="flex flex-wrap -mx-2 mb-6">
                <div class="w-full sm:w-1/2 px-2 mb-4 sm:mb-0">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('broj-raspisanih-konkursa-u-toku-component')
                    </div>
                </div>
                <div class="w-full sm:w-1/2 px-2">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('broj-raspisanih-konkursa-u2023-component')
                    </div>
                </div>
            </div>

            <!-- Row 5 -->
            <div class="flex flex-wrap -mx-2 mb-6">
                <div class="w-full sm:w-1/2 px-2 mb-4 sm:mb-0">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('broj-raspisanih-konkursa-u2022-component')
                    </div>
                </div>
                <div class="w-full sm:w-1/2 px-2 mb-4 sm:mb-0">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewire('broj-zavrsenih-konkursa-u2023-component')
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">
                @livewire('charts')
            </div>

        </div>
    </div>

</x-app-layout>