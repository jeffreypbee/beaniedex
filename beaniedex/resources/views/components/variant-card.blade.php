@props(['variant'])

<div class="variant-card" style="background: no-repeat top url('{{$variant->image}}'); background-size: contain;">
    <div class="name">{{ $variant->name }}</div>
    <div class="edit-delete-buttons">
        <a href="/variants/{{$variant->id}}/edit"><button>Edit</button></a>
        <form action="/variants/{{$variant->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </div>
</div>