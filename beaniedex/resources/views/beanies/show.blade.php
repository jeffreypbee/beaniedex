<x-layout>
<div class="show-beanie" style="background: no-repeat center url('{{$beanie->image}}')">
    <div class="blur-bg flex-column">
        <div class="beanie-name">
            <h2>
                {{ $beanie->name }}
            </h2>
            the {{ $beanie->species }}
        </div>
        <div>
            <img src="{{$beanie->image}}" alt="">
        </div>
        <div class="flex-column">
            
            <p><a href="/productlines/{{$beanie->productLine->id}}">{{ $beanie->productLine->name }}</a></p>
            <p class="poem">
                {!! nl2br(e($beanie->poem)); !!}
            </p>
        </div>
        
    </div>    
</div>


</x-layout>