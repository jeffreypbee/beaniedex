<x-layout>

<h2>Beanies</h2>

<form action="/beanies" class="search">

    <input type="text" name="search" class="search-bar" placeholder="Search Beanies">
    <button type="submit">Search</button>
    <div><a href="/beanies">Reset</a></div>

</form>

<a href="/beanies/create"><button>Add New Beanie</button></a>

@if (count($beanies) > 0)
    <x-beanie-card-container :beanies="$beanies" />
@else
    <div>No Beanies Found</div>
@endif

</x-layout>