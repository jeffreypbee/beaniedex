<x-layout>

    <h2>Edit {{ $tag->name }}</h2>

    <form action="/tags/{{$tag->id}}" method="POST" class="create-form">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$tag->name}}">
            @error('name')
                {{ $message }}
            @enderror
        </div>
    
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10">{{$tag->description}}</textarea>
            @error('description')
                {{ $message }}
            @enderror
        </div>

        <button>Update</button>
    </form>

</x-layout>