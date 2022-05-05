
@extends('layouts.app')

@section('content')

  <div class="pet-details">
    <div class="card-pet-detail">
        <div class="pet-container">

            <div class='pet-name'>
                <h4><b>{{$pestcontrol->name}}</b></h4>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('pestcontrols.edit', $pestcontrol->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('pestcontrols.destroy', $pestcontrol->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection