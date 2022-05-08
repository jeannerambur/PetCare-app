@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add Claw', 'color'=>'#FFB5B1'])

<a href="{{ route('claws.create-claw', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($claws as $claw)
<div class="container-appetit">
<a href="{{ route('claws.show', $claw->id)}}">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $claw->date}}</h1>
        </div>
    </div>
</a>
<div>

@endforeach



@endsection