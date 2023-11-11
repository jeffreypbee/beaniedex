@auth
@if (auth()->user()->roles->contains('name', 'user'))
{{$slot}}
@endif
@endauth