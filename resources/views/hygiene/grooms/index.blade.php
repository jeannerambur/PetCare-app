@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add Claw', 'color'=>'#FFB5B1'])

<a href="{{ route('grooms.create-groom', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($grooms as $groom)
<div class="container-appetit">
<a href="{{ route('grooms.show', $groom->id)}}">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $groom->date}}</h1>
        </div>
    </div>
</a>
<div>

@endforeach



@endsection