@props(['beanies'])

<div class="card-container">
    @foreach ($beanies as $beanie)
        <x-beanie-card :beanie="$beanie" />
    @endforeach
</div>
