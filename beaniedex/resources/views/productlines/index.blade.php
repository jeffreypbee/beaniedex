<x-layout>

<h2>Product Lines</h2>

@foreach ($productLines as $productLine)
    <div>
        <a href="/productlines/{{$productLine->id}}">{{ $productLine->name }}</a>
    </div>
@endforeach

<a href="/productlines/create"><button>Add New Product Line</button></a>

</x-layout>