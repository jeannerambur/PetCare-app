@extends('layouts.app')

@section('content')

<a href="{{ route('diseases.create-disease', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>

@foreach($diseases as $disease)
<div class="container-appetit">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $disease->name}}</h1>
        </div>
    </div>

<div>


<div class="edit-pet">
        <a href="{{ route('diseases.edit', $disease->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('diseases.destroy', $disease->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>

@endforeach



@endsection