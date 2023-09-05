<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <x-card>
        @if (count($listings) == 0)
            <h1>Empty listings</h1>
        @endif

        @foreach ($listings as $listing)
            <x-listing-card :listing='$listing' />
        @endforeach
    </x-card>
</x-layout>
