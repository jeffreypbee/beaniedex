@props(['beanie'])

<div class="card beanie-card">
    <a href="/beanies/{{$beanie->id}}">
        <img src="{{$beanie->image}}" alt="{{$beanie->name}}" title="{{$beanie->name}}">
        <div class="info">
            <div class="name">{{ $beanie->name }}</div>
            {{-- <div>(Variant Data)</div> --}}
        </div>
    </a>
</div>