<x-layouts.site :title="'Página Inicial'">
    <x-slot:header>
        @include('site.360.header')
    </x-slot:header>

    <x-slot:plans>
        @include('site.360.plans')
    </x-slot:plans>

</x-layouts.site>
