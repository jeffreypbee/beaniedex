<x-layout>
<h2>Edit Beanie</h2>

<form action="/beanies/{{$beanie->id}}" method="POST" class="create-form">
    @csrf
    @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$beanie->name}}">
            @error('name')
                {{ $message }}
            @enderror
        </div>    
    
        <div>
            <label for="species">Species</label>
            <input type="text" name="species" value="{{$beanie->species}}">
            @error('species')
                {{ $message }}
            @enderror
        </div>
        
        <div>
            <label for="product_line_id">Product Line</label>
            <select name="product_line_id">
                @foreach ($productLines as $productLine)
                    <option 
                        @if ($beanie->product_line_id == $productLine->id)
                            selected="selected"
                        @endif
                        value="{{$productLine->id}}">{{ $productLine->name }}</option>
                @endforeach
            </select>
            @error('product_line_id')
                {{ $message }}
            @enderror
        </div>
        
        <div>
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" value="{{$beanie->birthday}}">
            @error('birthday')
                {{ $message }}
            @enderror
        </div>
        
        <div>
            <label for="release_date">Release Date</label>
            <input type="date" name="release_date" value="{{$beanie->release_day}}">
            @error('release_date')
                {{ $message }}
            @enderror
        </div>
    
        <div>
            <label for="retired_date">Retired Date</label>
            <input type="date" name="retired_date" value="{{$beanie->retired_date}}">
            @error('retired_date')
                {{ $message }}
            @enderror
        </div>
        
        <div>
            <label for="poem">Poem</label>
            <textarea name="poem">{{$beanie->poem}}</textarea>
            @error('poem')
                <p>{{$message}}</p>
            @enderror
        </div>
    
        <div>
            <label for="notes">Notes</label>
            <textarea name="notes">{{$beanie->notes}}</textarea>
            @error('notes')
                <p>{{$message}}</p>
            @enderror
        </div>    
    
        <button>Update</button>
    </form>

</x-layout>