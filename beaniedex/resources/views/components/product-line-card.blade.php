@props(['productLine'])

<a href="/productlines/{{$productLine->id}}" style="width: 100%">
    <div class="product-line-card" style="
        background: no-repeat top url('{{$productLine->image}}'); 
        background-size: cover;
        border: 5px solid {{$productLine->color}};">
        <div class="name" style="
            background: linear-gradient(to right, transparent, {{$productLine->color}}, transparent);">
            {{ $productLine->plural }}
        </div>
    </div>
</a>