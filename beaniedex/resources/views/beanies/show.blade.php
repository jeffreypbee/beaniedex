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
                <x-product-line-pill :productLine="$beanie->productLine" />
                <p>Version: {{ $beanie->version }}</p>
                <p>Product Number: {{ $beanie->number }}</p>
                <p>Species: <a href="/beanies?species={{$beanie->species}}">{{ $beanie->species }}</a></p>
                <p>Birthday: {{ $beanie->birthday }}</p>
                <p>Released: {{ $beanie->releaseDate }}</p>
                <p>Retired: {{ $beanie->retiredDate }}</p>
                <p>Swing Tag Generations:
                    @foreach ($beanie->swingTags as $swingTag)
                        {{$swingTag->generation}}&nbsp;
                    @endforeach
                </p>
                <p>Tush Tag Generations:
                    @foreach ($beanie->tushTags as $tushTag)
                        {{$tushTag->generation}}&nbsp;
                    @endforeach
                </p>
            </div>
        </div>    
        
        <div class="beanie-tags width-100">
            <h3>Tags</h3>
            <x-auth-admin>
                <a href="/beanies/{{$beanie->id}}/tags/manage"><button>Manage Tags</button></a>
            </x-auth-admin>
            
            <x-tag-container :tags="$beanie->tags" />           
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
        
        <div class="versions width-100">
            <h3>Versions</h3>
            <x-beanie-card-container :beanies="$versions" />
        </div>
        
        <x-auth-admin>
            <div class="buttons">
                <a href="/beanies/{{$beanie->id}}/edit"><button>Edit</button></a>
                <form method="POST" action="/beanies/{{$beanie->id}}">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        </x-auth-admin>
        
    </div>    
</div>


</x-layout>