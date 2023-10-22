<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <title>BeanieDex</title>
    </head>
    <body>
        <header>
            <h1>BeanieDex</h1>
            <nav>
                <a href="/beanies">Beanies</a> | 
                <a href="/productlines">Product Lines</a>
            </nav>
        </header>

        <main>
            {{$slot}}
        </main>

        <footer>
            Copyright &copy; 2023 Jeffrey Bee
        </footer>
    </body>
</html>