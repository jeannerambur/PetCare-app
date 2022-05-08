@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Hygiène', 'color'=>'#FFB5B1'])

<div class="container-hygiene-page">

    <div class="button-hygiene">
        <div class="button-foods">
            <a href="{{ route('foods', Route::current()->parameter('id'))}}">Alimentation</a>
        </div>

        <div class="button-claws">
            <a href="{{ route('claws', Route::current()->parameter('id'))}}">Griffes</a>
        </div>

        <div class="button-litters">
            <a href="{{ route('litters', Route::current()->parameter('id'))}}">Nettoyage litière</a>
        </div>

        <div class="button-grooming">
            <a href="{{ route('grooms', Route::current()->parameter('id'))}}">Toilettage</a>
        </div>

        <div class="button-baths">
            <a href="{{ route('baths', Route::current()->parameter('id'))}}">Bain</a>
        </div>

        <div class="button-teeth">
            <a href="{{ route('dents', Route::current()->parameter('id'))}}">Dents</a>
        </div>

    </div>
</div>
@endsection