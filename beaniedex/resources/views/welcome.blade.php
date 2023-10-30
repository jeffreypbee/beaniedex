<x-layout>

    <h1 class="index-logo">
        the<br />
        BEANIE<br />
        DEX
    </h1>
    
    <a href="/beanies">All Beanies</a>
    <a href="/productlines">All Product Lines</a>

    <h2>Random Beanie</h2>
    <x-beanie-card :beanie="$randomBeanie" />

</x-layout>