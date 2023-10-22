<x-layout>

<h2>
    {{ $productLine->name }}
</h2>

<x-beanie-card-container :beanies="$productLine->beanies" />

</x-layout>