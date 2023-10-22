<x-layout>

<h2>Add New Beanie</h2>

<form action="/beanies" method="POST" class="create-form">
@csrf

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            {{ $message }}
        @enderror
    </div>    

    <div>
        <label for="species">Species</label>
        <input type="text" name="species" value="{{old('species')}}">
        @error('species')
            {{ $message }}
        @enderror
    </div>
    
    <div>
        <label for="product-line-id">Product Line</label>
        <select name="product-line-id">
            @foreach ($productLines as $productLine)
                <option value="{{$productLine->id}}">{{ $productLine->name }}</option>
            @endforeach
        </select>
        @error('product-line-id')
            {{ $message }}
        @enderror
    </div>
    
    <div>
        <label for="birthday">Birthday</label>
        <input type="date" name="birthday" value="{{old('birthday')}}">
        @error('birthday')
            {{ $message }}
        @enderror
    </div>
    
    <div>
        <label for="release-date">Release Date</label>
        <input type="date" name="release-date" value="{{old('release-date')}}">
        @error('release-date')
            {{ $message }}
        @enderror
    </div>

    <div>
        <label for="retired-date">Retired Date</label>
        <input type="date" name="retired-date" value="{{old('retired-date')}}">
        @error('retired-date')
            {{ $message }}
        @enderror
    </div>
    
    <div>
        <label for="poem">Poem</label>
        <textarea name="poem">{{old('poem')}}</textarea>
        @error('poem')
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <label for="notes">Notes</label>
        <textarea name="notes">{{old('notes')}}</textarea>
        @error('notes')
            <p>{{$message}}</p>
        @enderror
    </div>    

    <button>Submit</button>
</form>

</x-layout>