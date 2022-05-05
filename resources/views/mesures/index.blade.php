@extends('layouts.app')

@section('content')
<navbarmesures :title="'Mesures'"></navbarmesures>

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