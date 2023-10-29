<x-layout>

<div class="show-product-line"
    style="background: no-repeat center url('{{$productLine->image}}');
        background-size: 250%;">
    <div class="blur-bg flex-column">
        <h2>
            {{ $productLine->plural }}
        </h2>
        <img class="product-line-image" src="{{$productLine->image}}" alt="">
        <p>
            {{ $productLine->description }}
        </p>
    </div>    
</div>

<h3>Products</h3>
<x-beanie-card-container :beanies="$productLine->beanies" />

</x-layout>