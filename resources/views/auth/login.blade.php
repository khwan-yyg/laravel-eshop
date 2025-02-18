@extends('layouts.auth')

@section("style")
<style>
    html,body{
        height: 100%;
    }
    .form-signin{
        max-width: 330px;
        padding: 1rem;
    }

    .form-signin .form-floating:focus-within{
        z-index: 2
    }

    .form-signin input[type="password"]{
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
@endsection

@section("content")
<main class="form-signin w-100 m-auto">
    <form action="{{route("login.post")}}" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@mail.com" >
            <label for="floatingInput">Email address</label>

            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-floating" style="margin-bottom: 10px">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" >
            <label for="floatingPassword">Password</label>

            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-check text-start my-3">
            <input name="rememberme" class="form-check-input" type="checkbox"  value="remember-me" id="flexCheckDefault"/>
            <label for="flexCheckDefault">Remember me</label>
        </div>

        @if (@session("success"))
        <div class="alert alert-success">
            {{session("success")}}
        </div>
        @endif

        @if (@session("error"))
        <div class="alert alert-danger">
            {{session("error")}}
        </div>
        @endif

        <button class="btn btn-primary w-100 py-2" type="submit">
            Sign in
        </button>
        <a href={{route("register")}} class="text-center">
            Create new account
        </a>

        <p class="mt-5 mb-3 text-body-secondary">&copy; 2025</p>
    </form>
</main>

@endsection