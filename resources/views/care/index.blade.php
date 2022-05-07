@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Soins', 'color'=>'#B1A7F2'])


<div class="container-care-page">

    <div class="button-care">
        <div class="button-parasites">
            <a href="{{ route('pestcontrols', Route::current()->parameter('id'))}}">Anti-parasites</a>
        </div>

        <div class="button-wound">
            <a href="{{ route('treatments', Route::current()->parameter('id'))}}">Traitements</a>
        </div>

        <div class="button-vaccines">
            <a href="{{ route('vaccines', Route::current()->parameter('id'))}}">Vaccins</a>
        </div>

        <div class="button-vermifuge">
            <a href="{{ route('dewormers', Route::current()->parameter('id'))}}">Vermifuges</a>
        </div>

    </div>
</div>
@endsection