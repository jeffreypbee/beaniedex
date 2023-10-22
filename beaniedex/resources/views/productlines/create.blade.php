<x-layout>

<h2>Add a Product Line</h2>

<form action="/productlines" method="POST">
    @csrf

    <label for="name">Product Line Name</label>
    <input type="text" name="name" value="{{old('name')}}">
    @error('name')
        <p>{{$message}}</p>
    @enderror

    <label for="description">Product Line Name</label>
    <textarea name="description">{{old('description')}}</textarea>
    @error('description')
        <p>{{$message}}</p>
    @enderror

    <button>Submit</button>
</form>

</x-layout>