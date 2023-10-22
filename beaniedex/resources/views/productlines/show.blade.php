<h2>
    {{ $productLine->name }}
</h2>

@foreach ($productLine->beanies as $beanie)
    <div>
        <a href="/beanies/{{$beanie->id}}">{{ $beanie->name }}</a>
    </div>
@endforeach