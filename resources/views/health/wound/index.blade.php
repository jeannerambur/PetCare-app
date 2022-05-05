@extends('layouts.app')

@section('content')

<a href="{{ route('wounds.create-wound', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>

@foreach($wounds as $wound)
<div class="container-appetit">
<a href="{{ route('wounds.show', $wound->id)}}">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $wound->name}}</h1>
        </div>
    </div>
</a>
<div>

@endforeach



@endsection