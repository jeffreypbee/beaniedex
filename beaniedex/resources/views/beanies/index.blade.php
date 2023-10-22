@foreach ($beanies as $beanie)
    <div>
        <a href="/beanies/{{$beanie->id}}">{{ $beanie->name }}</a>
    </div>
@endforeach