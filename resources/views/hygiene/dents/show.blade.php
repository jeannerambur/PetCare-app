
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'dent', 'color'=>'#FFB5B1'])

  <div class="dent-details">
    <div class="card-dent-detail">
        <div class="pet-container">

            <div class='dent-date'>
                <h4><b>{{$dent->date}}</b></h4>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('dents.edit', $dent->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('dents.destroy', $dent->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection