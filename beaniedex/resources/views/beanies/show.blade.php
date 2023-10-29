<x-layout>
<div 
    class="show-beanie" 
    style="background: no-repeat center url('{{$beanie->image}}');
        background-size: 250%;">

    <div class="blur-bg flex-column">
        <div class="beanie-name width-100">
            <h2>
                {{ $beanie->name }}
            </h2>
        </div>
        <div class="beanie-info width-100">
            <img src="{{$beanie->image}}" alt="" class="beanie-image">
            <div class="beanie-stats">            
                <p>Product: <a href="/productlines/{{$beanie->productLine->id}}">{{ $beanie->productLine->name }}</a></p>
                <p>Species: <a href="/beanies?species={{$beanie->species}}">{{ $beanie->species }}</a></p>
                <p>Birthday: {{ $beanie->birthday }}</p>
                <p>Released: {{ $beanie->releaseDate }}</p>
                <p>Retired: {{ $beanie->retiredDate }}</p>
            </div>
        </div>        
        <div class="beanie-poem width-100">
            <h3>Poem</h3>
            <p class="poem">
                {!! nl2br(e($beanie->poem)); !!}
            </p>            
        </div>
        <div class="beanie-notes width-100">
            <h3>Notes</h3>
            {{ $beanie->notes }}
        </div>

        
        <div class="beanie-variants width-100">
            <h3>Variants</h3>
            <div>
                <a href="/beanies/{{$beanie->id}}/variants/create"><button>Add Variant</button></a>
            </div>

            @if (count($beanie->variants) > 0)
            <div class="variant-card-container">
                @foreach ($beanie->variants as $variant)
                    <x-variant-card :variant="$variant" />
                @endforeach
            </div>
            
            @else
                <div>No variants found for this beanie.</div>            
            @endif
                
        </div>
       
        
        <div class="buttons">
            <a href="/beanies/{{$beanie->id}}/edit"><button>Edit</button></a>
            <form method="POST" action="/beanies/{{$beanie->id}}">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
        
    </div>    
</div>


</x-layout>