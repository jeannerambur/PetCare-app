@extends('layouts.app')

@section('content')

    <div class="start-container">
        <div class="start-button">
            <a href="{{ url('/pets') }}">Get Started</a>
        </div>

        <div class='has-account-home'>
            <div class='account'>Have an account ?</div>
            <a class="login-home" href="{{ route('login') }}">Log In</a>
        </div>
    </div>
@endsection
