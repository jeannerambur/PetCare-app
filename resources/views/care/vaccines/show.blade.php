
@extends('layouts.app')

@section('content')

  <div class="pet-details">
    <div class="card-pet-detail">
        <div class="pet-container">

            <div class='pet-name'>
                <h4><b>{{$vaccine->name}}</b></h4>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('vaccines.edit', $vaccine->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('vaccines.destroy', $vaccine->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection