<x-layout>

<h2>{{ $tag->name }}</h2>

<x-auth-admin>
    <section>
        <a href="/tags/{{$tag->id}}/edit"><button>Edit</button></a>
        <form method="POST" action="/tags/{{$tag->id}}">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </section>
</x-auth-admin>


<section>{{ $tag->description }}</section>

<x-beanie-card-container :beanies="$tag->beanies" />

</x-layout>