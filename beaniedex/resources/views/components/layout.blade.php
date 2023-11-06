<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.2/dist/cdn.min.js"></script>
        <title>BeanieDex</title>
    </head>
    <body>
        <header>
            <h1><a href="/">the<br />BEANIE<br />DEX</a></h1>
            <nav>
                <a href="/beanies">Beanies</a>
                <a href="/productlines">Product Lines</a>
                <a href="/tags">Tags</a>
            </nav>
        </header>

        <div id="user-bar">
            @auth
            {{auth()->user()->name}} |&nbsp;
            <form action="/logout" method="POST">
            @csrf
                <button>Logout</button>
            </form>
            @else
            <a href="/login">Login</a> |
            <a href="/register">Register</a>
            @endauth
            
        </div>

        <main>
            <x-messages />
            {{$slot}}
        </main>

        <footer>
            Copyright &copy; 2023 Jeffrey Bee
        </footer>
    </body>
</html>

<style>

div#user-bar {
    grid-area: user;
    padding-block: 10px;
    display: flex;
    justify-content: right;
    color: white;
    font-weight: bold;
    margin-right: 20px;
}

#user-bar a {
    color: white;
    font-weight: bold;
}

</style>