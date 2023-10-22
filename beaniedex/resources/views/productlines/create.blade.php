<x-layout>

<h2>Add a Product Line</h2>

<form action="/productlines" method="POST" class="create-form">
    @csrf

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description">{{old('description')}}</textarea>
        @error('description')
            <p>{{$message}}</p>
        @enderror
    </div>

    <button>Submit</button>
</form>

</x-layout>