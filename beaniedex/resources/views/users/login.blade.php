<x-layout>

<h2>Login</h2>

<form action="/users/authenticate" method="POST" class="create-form">
@csrf
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{old('email')}}">
        @error('email')
            {{$message}}
        @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
        @error('password')
            {{$message}}
        @enderror
    </div>

    <button>Sign In</button>

    <div>Don't have an account?
        <a href="/register">Register</a>
    </div>

</form>

</x-layout>