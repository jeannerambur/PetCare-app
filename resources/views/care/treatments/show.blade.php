
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Traitement', 'color'=>'#B1A7F2'])


  <div class="pet-details">
    <div class="card-pet-detail">
        <div class="pet-container">

            <div class='pet-name'>
                <p>{{$treatment->name}}</p>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('treatments.edit', $treatment->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('treatments.destroy', $treatment->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection