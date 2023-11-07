@props(['productLine'])

<a href="/productlines/{{$productLine->id}}">
    <div class="product-line-card" style="
        background: no-repeat top url('{{$productLine->image}}'); 
        background-size: cover;">
        <div class="name" style="
            background: linear-gradient(to right, transparent, {{$productLine->color}}, transparent);">
            {{ $productLine->plural }}
        </div>
    </div>
</a>

<style>
.product-line-card {
    width: 300px;
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    transition: all .5s;
}

.product-line-card:hover {
    scale: 110%;
    box-shadow: var(--shadow);
}

.product-line-card .name {
    font-weight: bold;
    font-size: 1.5rem;
    text-align: center;
    color: white;
    text-shadow: 2px 2px 2px #1115;
    width: 100%;
    padding: 10px;
}
</style>