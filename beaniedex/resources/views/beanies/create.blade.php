<x-layout>

<h2>Add New Beanie</h2>

<form action="/beanies" method="POST">
@csrf

    <label for="name">Name</label>
    <input type="text" name="name" value="{{old('name')}}">
    @error('name')
        {{ $message }}
    @enderror

    <label for="species">Species</label>
    <input type="text" name="species" value="{{old('species')}}">
    @error('species')
        {{ $message }}
    @enderror

    <label for="productLineId">Product Line</label>
    <select name="productLineId">
        @foreach ($productLines as $productLine)
            <option value="{{$productLine->id}}">{{ $productLine->name }}</option>
        @endforeach
    </select>
    @error('productLineId')
        {{ $message }}
    @enderror
</form>

</x-layout>