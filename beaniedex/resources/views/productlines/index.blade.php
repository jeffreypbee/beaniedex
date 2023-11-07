<x-layout>

<h2>Product Lines</h2>

<x-auth-admin>
    <a href="/productlines/create"><button>Add New Product Line</button></a>
</x-auth-admin>


<div class="product-line-card-container">
@foreach ($productLines as $productLine)
    <x-product-line-card :productLine="$productLine" />
@endforeach
</div>



</x-layout>

<style>
.product-line-card-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
}
</style>