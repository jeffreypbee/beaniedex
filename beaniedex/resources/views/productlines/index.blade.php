<x-layout>

<h2>Product Lines</h2>

@foreach ($productLines as $productLine)
    <div>
        <a href="/productlines/{{$productLine->id}}">{{ $productLine->name }}</a>
    </div>
@endforeach

</x-layout>