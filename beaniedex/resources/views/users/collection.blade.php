<x-layout>

<h2>My Collection</h2>

@foreach ($collection as $collectedBeanie)
    <div>
        <x-beanie-card :beanie="$collectedBeanie->beanie" />
    </div>
@endforeach

</x-layout>