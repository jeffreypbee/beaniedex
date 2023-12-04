<x-layout>

<h2>My Collection</h2>

<div class="card-container">
@foreach ($collection as $collectedBeanie)
    <x-beanie-card :beanie="$collectedBeanie->beanie" />
@endforeach
</div>

</x-layout>