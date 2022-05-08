
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Litters', 'color'=>'#FFB5B1'])

  <div class="litter-details">
    <div class="card-litter-detail">
        <div class="pet-container">

            <div class='litter-date'>
                <h4><b>{{$litter->date}}</b></h4>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('litters.edit', $litter->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('litters.destroy', $litter->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection