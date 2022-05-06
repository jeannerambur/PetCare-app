@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Appetit', 'color'=>'#F2CA80'])


  <div class="pet-details">
    <div class="card-pet-detail">
        <div class="pet-container">

            <div class='pet-name'>
                <h4><b>{{$appetit->appetit}}</b></h4>
            </div>

        </div>
      </div>



    <div class="edit-pet">
        <a href="{{ route('appetit.edit', $appetit->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('appetit.destroy', $appetit->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>

@endsection