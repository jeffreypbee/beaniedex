@props(['tag'])

<a href="/tags/{{$tag->id}}">
    <div class="tag">{{ $tag->name }}</div>
</a>
