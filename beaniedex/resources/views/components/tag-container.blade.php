@props(['tags'])

<div class="tag-container">
    @foreach ($tags as $tag)
        <x-tag :tag="$tag" />
    @endforeach
</div>
