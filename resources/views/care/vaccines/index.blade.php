@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Vaccines', 'color'=>'#B1A7F2'])

<a href="{{ route('vaccines.create-vaccine', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>



@foreach($vaccines as $vaccine)
<div class="container-appetit">
<a href="{{ route('vaccines.show', $vaccine->id)}}">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $vaccine->name}}</h1>
        </div>
    </div>
<div>

@endforeach



@endsection