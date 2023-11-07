<x-layout>

<h2>Edit {{$productLine->name}} Product Line</h2>

<form action="/productlines/{{$productLine->id}}" method="POST" class="create-form">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Name (singular)</label>
        <input type="text" name="name" value="{{$productLine->name}}">
        @error('name')
            {{$message}}
        @enderror
    </div>

    <div>
        <label for="plural">Name (plural)</label>
        <input type="text" name="plural" value="{{$productLine->plural}}">
        @error('plural')
            {{$message}}            
        @enderror
    </div>

    <div>
        <label for="image">Image</label>
        <input type="text" name="image" value="{{$productLine->image}}">
        @error('image')
            {{$message}}
        @enderror
    </div>

    <div>
        <label for="color">Color</label>
        <input type="color" name="color" value="{{$productLine->color}}">
        @error('color')
            {{$message}}
        @enderror
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" cols="30" rows="10">{{$productLine->description}}</textarea>
        @error('description')
            {{$message}}
        @enderror
    </div>

    <button>Submit</button>

</form>

</x-layout>