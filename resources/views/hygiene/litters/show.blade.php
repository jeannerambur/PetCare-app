
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'tooth', 'color'=>'#FFB5B1'])

  <div class="tooth-details">
    <div class="card-tooth-detail">
        <div class="pet-container">

            <div class='tooth-date'>
                <h4><b>{{$tooth->date}}</b></h4>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('teeth.edit', $tooth->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('teeth.destroy', $tooth->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection