<x-layout>

<h2>Beanies</h2>

<form action="/beanies" class="search">

    <input type="text" name="search" class="search-bar" placeholder="Search Beanies">
    <button type="submit">Search</button>
    <div><a href="/beanies">Reset</a></div>

</form>

<x-auth-admin>
    <a href="/beanies/create"><button>Add New Beanie</button></a>
</x-auth-admin>

<x-beanie-card-container :beanies="$beanies" />

</x-layout>