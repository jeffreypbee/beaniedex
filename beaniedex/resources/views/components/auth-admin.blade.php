@auth
@if (auth()->user()->roles->contains('name', 'admin'))
{{$slot}}
@endif
@endauth