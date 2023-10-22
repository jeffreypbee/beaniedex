<x-layout>

<h2>
    {{ $beanie->name }}
</h2>
<p>the {{ $beanie->species }}</p>
<p><a href="/productlines/{{$beanie->productLine->id}}">{{ $beanie->productLine->name }}</a></p>
<p>
    {!! nl2br(e($beanie->poem)); !!}
</p>

</x-layout>