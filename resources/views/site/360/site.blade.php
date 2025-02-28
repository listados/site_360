<x-layouts.site :title="'Página Inicial'">
    <x-slot:header>
       @include('site.360.header')
    </x-slot:header>

    <x-slot:hero>
        @include('site.360.hero')
    </x-slot:hero>

    <x-slot:step>
        @include('site.360.step')
    </x-slot:step>

    <x-slot:call>
        @include('site.360.call')
    </x-slot:call>

    <x-slot:client>
        @include('site.360.client')
    </x-slot:client>

    <x-slot:testimonials>
        @include('site.360.testimonials')
    </x-slot:testimonials>

    <x-slot:services>
        @include('site.360.services')
    </x-slot:services>

    <x-slot:price>
        @include('site.360.price')
    </x-slot:price>

    <x-slot:flag>
        @include('site.360.flag')
    </x-slot:flag>

    <x-slot:work>
        @include('site.360.work')
    </x-slot:work>

    <x-slot:listados>
        @include('site.360.listados')
    </x-slot:listados>

    <x-slot:contact>
        @include('site.360.contact')
    </x-slot:contact>
</x-layouts.site>
