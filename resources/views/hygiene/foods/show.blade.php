
@extends('layouts.app')

@section('content')

  <div class="pet-details">
    <div class="card-pet-detail">
        <div class="pet-container">

            <div class='pet-name'>
                <h4><b>{{$food->type}}</b></h4>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('foods.edit', $food->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('foods.destroy', $food->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection