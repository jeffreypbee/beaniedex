<x-layout>

<h2>{{ $tag->name }}</h2>

<section>
    <a href="/tags/{{$tag->id}}/edit"><button>Edit</button></a>
    <form action="POST" action="/tags/{{$tag->id}}">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</section>

<section>{{ $tag->description }}</section>

<x-beanie-card-container :beanies="$tag->beanies" />

</x-layout>