<x-layout>

    <h2>Add Variant for {{ $beanie->name }}</h2>

    <form action="/variants" method="POST" class="create-form">
    @csrf
    
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="image">Image</label>
        <input type="text" name="image" value="{{old('image')}}">
        @error('image')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="notes">Notes</label>
        <textarea name="notes">{{old('notes')}}</textarea>
        @error('notes')
            <p>{{$message}}</p>
        @enderror
    </div>
    
    <input type="hidden" name="beanie_id" value="{{$beanie->id}}">
    <button>Create</button>
    </form>

</x-layout>