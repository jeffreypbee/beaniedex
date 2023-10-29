@props(['productLine'])

<a href="/productlines/{{$productLine->id}}">
    <button class="pill" style="background-color: {{$productLine->color}}">
        {{ $productLine->name }}
    </button>
</a>