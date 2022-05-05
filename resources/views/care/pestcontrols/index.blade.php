@extends('layouts.app')

@section('content')

<a href="{{ route('pestcontrols.create-pestcontrol', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($pestcontrols as $pestcontrol)
<div class="container-appetit">
<a href="{{ route('pestcontrols.show', $pestcontrol->id)}}">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $pestcontrol->name}}</h1>
        </div>
    </div>
<div>

@endforeach



@endsection