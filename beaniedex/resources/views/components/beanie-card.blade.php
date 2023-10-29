@props(['beanie'])

<a href="/beanies/{{$beanie->id}}">
<div class="beanie-card" style="background: no-repeat top url('{{$beanie->image}}'); background-size: contain;">

    @if (count($beanie->variants) > 0)
        @php
            $variantCount = count($beanie->variants);
        @endphp
            <div class="variant">
                {{ $variantCount }} 
                {{ $variantCount > 1 ? 'Variants' : 'Variant' }}
            </div>
        @endif
    
    {{-- <img src="{{$beanie->image}}" alt="{{$beanie->name}}" title="{{$beanie->name}}"> --}}
    <div class="info">
        
        <div class="name">{{ $beanie->name }}</div>
        
    </div>
    
</div>
</a>