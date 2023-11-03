@props(['beanie'])

<a href="/beanies/{{$beanie->id}}">
    {{-- <div class="beanie-card"> --}}
<div class="beanie-card" style="background: no-repeat center url('{{$beanie->image}}'); background-size: contain;">
    <div class="productline"
        style="background: {{$beanie->productLine->color}};">
        {{ $beanie->productLine->name }}
    </div>

    {{-- <img src="{{$beanie->image}}" 
        alt="{{$beanie->name}}" 
        title="{{$beanie->name}}" /> --}}

    <div class="info">
        
        <div class="name">{{ $beanie->name }}</div>
        <div class="version"> {{ $beanie->version }}</div>
        
    </div>
    
</div>
</a>

<style>
.beanie-card img {
    height: 180px;
    object-fit: contain;
}

.beanie-card {
    transition: all .5s;
    width: 150px;
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    box-shadow: 2px 5px 5px #3335;
    position: relative;
}

.beanie-card:hover {
    /* transform: rotate(-10deg); */
    scale: 110%;
}

.beanie-card .productline {
    width: 100%;
    text-align: center;
    color: white;
    position: absolute;
    top: 0;
}

.beanie-card .info {
    width: 100%;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background: var(--purple);
    text-align: center;
    position: relative;
}

.beanie-card .info div {
    margin: 0px;
}

.beanie-card .name {
    font-size: 1.2rem;
    font-weight: bold;
    padding: 5px;  
}

.beanie-card .version {
    width: 100%;
    position: absolute;
    top: -15px;
    background: var(--pink);
}
</style>