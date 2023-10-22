@foreach ($productLines as $productLine)
    <div>
        <a href="/productlines/{{$productLine->id}}">{{ $productLine->name }}</a>
    </div>
@endforeach