@extends('layouts.app')

@section('content')

<a href="{{ route('diseases.create-disease', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>

@foreach($diseases as $disease)
<div class="container-appetit">
<a href="{{ route('diseases.show', $disease->id)}}">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $disease->name}}</h1>
        </div>
    </div>
</a>
<div>

@endforeach



@endsection