@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Santé', 'color'=>'#F2865E'])

<div class="container-health-page">

    <div class="button-health">
        <div class="button-allergies">
            <a href="{{ route('allergies', Route::current()->parameter('id'))}}">Allergies</a>
        </div>

        <div class="button-wound">
            <a href="{{ route('wounds', Route::current()->parameter('id'))}}">Blessures</a>
        </div>

        <div class="button-diseases">
            <a href="{{ route('diseases', Route::current()->parameter('id'))}}">Maladies</a>
        </div>

    </div>
</div>
@endsection