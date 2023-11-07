<x-layout>

    <h2>Tags</h2>

    <x-auth-admin>
        <a href="/tags/create"><button>Create New Tag</button></a>
    </x-auth-admin>
    
    <x-tag-container :tags="$tags" />

</x-layout>