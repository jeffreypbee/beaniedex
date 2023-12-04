@props(['beanie'])

<a href="/beanies/{{$beanie->id}}">
    <div class="beanie-card">
        <img class="beanie-image" src="{{$beanie->image}}" alt="{{$beanie->name}}" title="{{$beanie->name}}" />
        <div class="beanie-info">
            <div class="beanie-name">{{$beanie->name}}</div>
            @unless ($beanie->number === null)
                <div class="beanie-number"># {{$beanie->number}}</div>
            @endunless
            @unless ($beanie->version === null)
                <div class="beanie-version">{{$beanie->version}}</div>
            @endunless
            
        </div>
        <div class="beanie-productline"
            style="background: linear-gradient(to right, transparent 5%, {{$beanie->productLine->color}});">
            {{$beanie->productLine->name}}
        </div>
    </div>
</a>


{{-- <a href="/beanies/{{$beanie->id}}">

    <div class="beanie-card">
    <div class="beanie-card" style="background: no-repeat center url('{{$beanie->image}}'); background-size: contain;">
    <div class="productline"
        style="background: {{$beanie->productLine->color}};">
        {{ $beanie->productLine->name }}
    </div>

    <img src="{{$beanie->image}}" 
        alt="{{$beanie->name}}" 
        title="{{$beanie->name}}" />

    <div class="info">
        
        <div class="name">{{ $beanie->name }}</div>
        <div class="version"> {{ $beanie->version }}</div>
        
    </div>
    
    </div>
</a> --}}

<style>
.beanie-card {
    position: relative;
    height: 150px;
    width: 250px;
    display: flex;
    background: var(--lighter-purple);
    transition: all .5s;
}

.beanie-card:hover {
    scale: 110%;
    box-shadow: 5px 5px 10px gray;
    z-index: 5;
}

.beanie-card .beanie-image {    
    border-radius: 0 20px 20px 0;
}

.beanie-card .beanie-info {
    width: 100%;
    text-align: center;
}

.beanie-card .beanie-name {
    font-weight: bold;
    text-align: center;
    font-size: 1.2rem;
    border-bottom: 1px solid white;
}

.beanie-card .beanie-number {
    text-align: center;
    font-size: .8rem;
}

.beanie-card .beanie-productline {
    text-align: right;
    position: absolute;
    right: 0;
    bottom: 0;;
    width: 150px;
    color: white;
    padding-inline: 5px;
}
</style>