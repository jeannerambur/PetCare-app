
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'bath', 'color'=>'#FFB5B1'])

  <div class="bath-details">
    <div class="card-bath-detail">
        <div class="pet-container">

            <div class='bath-date'>
                <h4><b>{{$bath->date}}</b></h4>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('baths.edit', $bath->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('baths.destroy', $bath->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection