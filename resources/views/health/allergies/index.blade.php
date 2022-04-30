@extends('layouts.app')

@section('content')


<a href="{{ route('allergies.create-allergy', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($allergies as $allergy)
<div class="container-appetit">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $allergy->name}}</h1>
        </div>
    </div>

<div>

<div class="edit-pet">
        <a href="{{ route('allergies.edit', $allergy->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('allergies.destroy', $allergy->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>

@endforeach



@endsection