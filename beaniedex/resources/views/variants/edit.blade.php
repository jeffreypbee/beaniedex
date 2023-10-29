<x-layout>
<h2>Edit {{$variant->beanie->name}} Variant</h2>

<form action="/variants/{{$variant->id}}" method="POST" class="create-form">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$variant->name}}">
        @error('name')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="image">Name</label>
        <input type="text" name="image" value="{{$variant->image}}">
        @error('image')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="notes">notes</label>
        <textarea name="notes">{{$variant->notes}}</textarea>
        @error('notes')
            {{ $message }}
        @enderror
    </div>

    <button>Update</button>
</form>

</x-layout>