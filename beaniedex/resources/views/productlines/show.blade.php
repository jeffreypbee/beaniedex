<x-layout>

<div class="show-product-line">
    <h2>
        {{ $productLine->plural }}
    </h2>
    <x-auth-admin>
        <a href="/productlines/{{$productLine->id}}/edit"><button>Edit</button></a>
    </x-auth-admin>
    <img class="product-line-image" src="{{$productLine->image}}" alt="">
    <div>
                
        <p>
            {{ $productLine->description }}
        </p>
    </div>    
</div>

<h3>Products</h3>
<x-beanie-card-container :beanies="$productLine->beanies" />

</x-layout>

<style>
.show-product-line {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
}

.product-line-image {
    width: 300px;
}
</style>