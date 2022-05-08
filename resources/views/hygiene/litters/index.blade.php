@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add Claw', 'color'=>'#FFB5B1'])

<a href="{{ route('litters.create-litter', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($litters as $litter)
<div class="container-litter">
    <a href="{{ route('litters.show', $litter->id)}}">
        <div class="date-litter">
            <h1>{{ $litter->date}}</h1>
        </div>
    </a>
<div>

@endforeach
@endsection