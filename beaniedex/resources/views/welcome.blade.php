<x-layout>

    <h1 class="index-logo">
        the<br />
        BEANIE<br />
        DEX
    </h1>
    
    <a href="/beanies">All Beanies</a>
    <a href="/productlines">All Product Lines</a>

    <section class="some-beanies">

        <div class="latest-beanies">
            <h2>Latest Beanies</h2>
            <x-beanie-card-container :beanies="$latestBeanies" />
        </div>

        <div class="random-beanies">
            <h2>Random Beanies</h2>
            <x-beanie-card-container :beanies="$randomBeanies" />
        </div>

        <div class="todays-birthdays">
            <h2>Today's Birthdays</h2>
            <x-beanie-card-container :beanies="$todaysBirthdays" />
        </div>

    </section>
    

</x-layout>

<style>

.some-beanies {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    grid-template-areas: "latest random birthdays";
    gap: 10px;
}

.latest-beanies, .random-beanies, .todays-birthdays {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.latest-beanies, .random-beanies, .todays-birthdays {
    min-width: 30%;
}

.latest-beanies {
    grid-area: latest;
}

.random-beanies {
    grid-area: random;
}

.todays-birthdays {
    grid-area: birthdays;
}

</style>