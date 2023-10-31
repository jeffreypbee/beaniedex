@props(['beanie'])

<a href="/beanies/{{$beanie->id}}">
    {{-- <div class="beanie-card"> --}}
<div class="beanie-card" style="background: no-repeat top url('{{$beanie->image}}'); background-size: contain;">
    <div class="productline"
        style="background-color: {{$beanie->productLine->color}};">
        {{ $beanie->productLine->name }}
    </div>

    {{-- <img src="{{$beanie->image}}" 
        alt="{{$beanie->name}}" 
        title="{{$beanie->name}}" /> --}}

    <div class="info">
        
        <div class="name">{{ $beanie->name }}</div>
        <div class="version">{{ $beanie->version }}</div>
        
    </div>
    
</div>
</a>