@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add Claw', 'color'=>'#FFB5B1'])

<a href="{{ route('dents.create-dent', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($dents as $dent)
<div class="container-appetit">
<a href="{{ route('dents.show', $dent->id)}}">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $dent->date}}</h1>
        </div>
    </div>
</a>
<div>

@endforeach



@endsection