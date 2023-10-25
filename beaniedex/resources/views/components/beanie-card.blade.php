@props(['beanie'])

<div class="card beanie-card" style="background: linear-gradient(160deg, transparent 70%, var(--pink-lucent)), no-repeat center url('{{$beanie->image}}'); background-size: contain;">
    <a href="/beanies/{{$beanie->id}}">
        {{-- <img src="{{$beanie->image}}" alt="{{$beanie->name}}" title="{{$beanie->name}}"> --}}
        <div class="info">
            <div class="name">{{ $beanie->name }}</div>
            {{-- <div>(Variant Data)</div> --}}
        </div>
    </a>
</div>