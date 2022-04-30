@extends('layouts.app')

@section('content')

<a href="{{ route('poids.create-poids', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($poids as $poid)
<div class="uper">


  <h1>Poids : {{ $poid->poids}} kg</h1>
<div>


<div class="edit-pet">
        <a href="{{ route('poids.edit', $poid->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('poids.destroy', $poid->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
@endforeach


@endsection