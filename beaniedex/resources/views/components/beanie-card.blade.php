@props(['beanie'])

<a href="/beanies/{{$beanie->id}}">
<div class="card beanie-card" style="background: no-repeat top url('{{$beanie->image}}'); background-size: contain;">
    
        {{-- <img src="{{$beanie->image}}" alt="{{$beanie->name}}" title="{{$beanie->name}}"> --}}
        <div class="info">
            @if (count($beanie->variants) > 0)
                <div class="variant">({{ count($beanie->variants) }} variants)</div>
            @endif
            <div class="name">{{ $beanie->name }}</div>
            
        </div>
    
</div>
</a>