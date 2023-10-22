@props(['beanie'])

<div class="card beanie-card">
    <a href="/beanies/{{$beanie->id}}">
        <img src="{{$beanie->image}}" alt="{{$beanie->name}}" title="{{$beanie->name}}">
    </a>
</div>