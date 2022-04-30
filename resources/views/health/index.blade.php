@extends('layouts.app')

@section('content')

<div class="container-mesures-page">

    <div class="button-mesures">
        <div class="button-allergies">
            <a href="{{ route('allergies', Route::current()->parameter('id'))}}">Allergies</a>
        </div>

        <div class="button-wound">
            <a href="{{ route('wounds', Route::current()->parameter('id'))}}">Blessures</a>
        </div>

        <div class="button-diseases">
            <a href="/">Maladies</a>
        </div>

    </div>
</div>
@endsection