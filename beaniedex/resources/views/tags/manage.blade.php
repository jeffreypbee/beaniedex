<x-layout>

<h2>Manage {{ $beanie->name }}'s Tags</h2>

<section>
    <h3>Remove Tags</h3>
    @foreach ($beanie->tags as $tag)
        <div>
            <form method="POST" action="/beanies/{{$beanie->id}}/tags/{{$tag->id}}">
                @csrf
                @method('DELETE')
                <button>X</button> {{ $tag->name }}
            </form>
        </div>
    @endforeach
</section>

<section>
    <h3>Add Tags</h3>
    <form method="POST" action="/beanies/{{$beanie->id}}/tags/">
        @csrf
        <select name="tag" id="">
            @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{ $tag->name }}</option>
            @endforeach
        </select>
        <button>Add Tag</button>
    </form>
</section>

</x-layout>