<x-layout>

<h2>Product Lines</h2>

<a href="/productlines/create"><button>Add New Product Line</button></a>

<div class="product-line-card-container">
@foreach ($productLines as $productLine)
    <x-product-line-card :productLine="$productLine" />
@endforeach
</div>



</x-layout>