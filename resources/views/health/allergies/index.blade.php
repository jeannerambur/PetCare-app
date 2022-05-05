@extends('layouts.app')

@section('content')


<a href="{{ route('allergies.create-allergy', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($allergies as $allergy)
<div class="container-appetit">
<a href="{{ route('allergies.show', $allergy->id)}}">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $allergy->name}}</h1>
        </div>
    </div>
</a>
<div>

@endforeach



@endsection