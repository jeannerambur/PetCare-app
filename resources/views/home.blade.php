@extends('layouts.app')

@section('content')
<div class="container-home-page">
    <div class="presentation">
        <div class="username">
            Hi <strong>{{ Auth::user()->name }}</strong>
        </div>
        <div class="username-subtitle">
            Let’s take care of your pets
        </div>

    </div>
    <div class="pets-card">
        <div class="my-pets">
            My Pets
        </div>
        <button class="button-add-pet" onclick="window.location.href = '{{ url('/pets/create') }}' ">+</button>

    </div>

    
</div>
@endsection