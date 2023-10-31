@props(['beanies'])

<div class="card-container">
    @if (count($beanies) > 0)
        @foreach ($beanies as $beanie)
            <x-beanie-card :beanie="$beanie" />
        @endforeach
    @else        
        No Beanies Found
    @endif
    
</div>
