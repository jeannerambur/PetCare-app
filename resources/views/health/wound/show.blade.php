
@extends('layouts.app')

@section('content')

  <div class="pet-details">
    <div class="card-pet-detail">
        <div class="pet-container">

            <div class='pet-name'>
                <h4><b>{{$wound->name}}</b></h4>
            </div>

        </div>
      </div>


    <div class="edit-pet">
        <a href="{{ route('wounds.edit', $wound->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('wounds.destroy', $wound->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection