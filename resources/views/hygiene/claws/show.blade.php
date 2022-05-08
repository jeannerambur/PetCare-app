
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Claw', 'color'=>'#FFB5B1'])

  <div class="claw-details">
    <div class="card-claw-detail">
        <div class="pet-container">

            <div class='claw-date'>
                <h4><b>{{$claw->date}}</b></h4>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('claws.edit', $claw->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('claws.destroy', $claw->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection