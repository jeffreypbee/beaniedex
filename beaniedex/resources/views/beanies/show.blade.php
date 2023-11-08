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

        <x-auth-admin>
            <div class="admin-buttons">
                <a href="/beanies/{{$beanie->id}}/edit"><button>Edit</button></a>
                <form method="POST" action="/beanies/{{$beanie->id}}">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        </x-auth-admin>

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
        
        <div class="buttons">
            <button>Fav</button>
            <button>Wish</button>
            <button>Add</button>
        </div>
        
    </div>    
</div>


</x-layout>

<style>

.show-beanie .beanie-stats {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.show-beanie, .show-product-line {
    height: 100%;
    width: 80%;
    max-width: 600px;
    border-radius: 20px;
    position: relative;
}

.show-beanie .blur-bg, .show-product-line .blur-bg {
    border-radius: 20px;
}

.show-beanie h2 {
    margin: 10px;
}

.show-beanie .beanie-name {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    margin: 0px;
}

.show-beanie .beanie-info {
    display: flex;
    padding: 5px;
    gap: 10px;
    width: 100%;
}

.show-beanie .beanie-info p {
    margin: 5px;
}

.show-beanie .beanie-stats {
    border-radius: 20px;
    width: 100%;
    padding: 5px;
    background: linear-gradient(to right, white, transparent);
}

.show-beanie .admin-buttons {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.show-beanie .beanie-poem {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.show-beanie .beanie-image {
    max-width: 250px;
    object-fit: contain;
}

.show-beanie .buttons {
    position: absolute;
    display: flex;
    flex-direction: column;
    align-items: center;
    right: -25px;
    top: 10px;
    gap: 5px;
}

.show-beanie .buttons button {
    width: 50px;
    height: 50px;
}

.show-beanie h3 {
    width: 100%;
    text-align: center;
    background: linear-gradient(to right, transparent, white, transparent);
}

.poem {
    width: 50%;
    padding: 10px;
    font-style: italic;
    line-height: .8rem;
    background: #fff5;
    border-radius: 20px;
    text-align: center;
}

.show-beanie .beanie-tags {
    display: flex;
    flex-direction: column;
    align-items: center;
}

</style>