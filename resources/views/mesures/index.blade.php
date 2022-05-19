@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Mesures', 'color'=>'#F2CA80'])

<div class="container-mesures-page">

    <div class="button-mesures">
        <div class="button-appetit">
            <a href="{{ route('appetit', Route::current()->parameter('id'))}}">Appetit</a>
        </div>

        <div class="button-poids">
            <a href="{{ route('poids', Route::current()->parameter('id'))}}">Poids</a>
        </div>
    </div>
</div>
@endsection