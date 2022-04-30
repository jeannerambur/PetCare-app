@extends('layouts.app')

@section('content')

<a href="{{ route('wounds.create-wound', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>

@foreach($wounds as $wound)
<div class="container-appetit">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $wound->name}}</h1>
        </div>
    </div>

<div>


<div class="edit-pet">
        <a href="{{ route('wounds.edit', $wound->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('wounds.destroy', $wound->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>

@endforeach



@endsection