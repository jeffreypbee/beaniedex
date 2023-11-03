<x-layout>

<h2>Register an Account</h2>

<form action="/users" method="POST" class="create-form">
@csrf

    <div>
        <label for="name">Username</label>
        <input required type="text" name="name" value="{{old('name')}}">
        @error('name')
            {{$message}}
        @enderror
    </div>

    <div>
        <label for="email">Email</label>
        <input required type="email" name="email" value="{{old('email')}}">
        @error('email')
            {{$message}}
        @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input required type="password" name="password">
        @error('password')
            {{$message}}
        @enderror
    </div>

    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation">
        @error('password_confirmation')
            {{$message}}
        @enderror
    </div>

    <button>Register</button>

    <div>
        Already have an account?
        <a href="/login">Login</a>
    </div>

</form>

</x-layout>