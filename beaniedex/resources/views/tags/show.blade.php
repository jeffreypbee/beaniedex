<x-layout>

<h2>{{ $tag->name }}</h2>

<section>{{ $tag->description }}</section>

<x-beanie-card-container :beanies="$tag->beanies" />

</x-layout>