<x-layout>

<h2>Create Tag</h2>

<form action="/tags" method="POST" class="create-form">
    @csrf

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10">{{old('description')}}</textarea>
        @error('description')
            {{ $message }}
        @enderror
    </div>

    <button>Submit</button>

</form>

</x-layout>