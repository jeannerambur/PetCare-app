
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Claw', 'color'=>'#FFB5B1'])

  <div class="groom-details">
    <div class="card-groom-detail">
        <div class="pet-container">

            <div class='groom-date'>
                <h4><b>{{$groom->date}}</b></h4>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('grooms.edit', $groom->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('grooms.destroy', $groom->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection