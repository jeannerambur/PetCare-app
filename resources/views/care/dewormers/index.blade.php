@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Vermifuges', 'color'=>'#B1A7F2'])

<a href="{{ route('dewormers.create-dewormer', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($dewormers as $dewormer)
<div class="container-appetit">
<a href="{{ route('dewormers.show', $dewormer->id)}}">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $dewormer->name}}</h1>
        </div>
    </div>
<div>

@endforeach



@endsection