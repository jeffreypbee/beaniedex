@props(['beanie'])

<a href="/beanies/{{$beanie->id}}">
<div class="beanie-card" style="background: no-repeat top url('{{$beanie->image}}'); background-size: contain;">
    
    {{-- <img src="{{$beanie->image}}" alt="{{$beanie->name}}" title="{{$beanie->name}}"> --}}
    <div class="info">
        
        <div class="name">{{ $beanie->name }}</div>
        
    </div>
    
</div>
</a>