<x-layout>

<h2>Add a Product Line</h2>

<form action="/productlines" method="POST" class="create-form">
    @csrf

    <div>
        <label for="name">Name (singular)</label>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <label for="plural">Name (plural)</label>
        <input type="text" name="plural" value="{{old('plural')}}">
        @error('plural')
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <label for="image">Image</label>
        <input type="text" name="image" value="{{old('image')}}">
        @error('image')
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <label for="color">Color</label>
        <input type="color" name="color" value="{{old('color')}}">
        @error('color')
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