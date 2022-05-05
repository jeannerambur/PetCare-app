@extends('layouts.app')

@section('content')

<div class="container-hygiene-page">

    <div class="button-hygiene">
        <div class="button-baths">
            <a href="{{ route('foods', Route::current()->parameter('id'))}}">Alimentation</a>
        </div>

        <div class="button-claws">
            <a href="/">Griffes</a>
        </div>

        <div class="button-foods">
            <a href="/">Nettoyage litière</a>
        </div>

        <div class="button-grooming">
            <a href="/">Toilettage</a>
        </div>

        <div class="button-litters">
            <a href="/">Bain</a>
        </div>

        <div class="button-teeth">
            <a href="/">Dents</a>
        </div>

    </div>
</div>
@endsection