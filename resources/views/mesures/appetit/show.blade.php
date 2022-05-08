@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Appetit', 'color'=>'#F2CA80'])


  <div class="appetit-details">
    <div class="card-appetit-detail">
        <div class="appetit-container">

            <div class='appetit-name'>
                <p><span>Appétit</span> {{$appetit->appetit}}</p>
            </div>

            <div class='appetit-date'>
                <p><span>Date</span> {{ date('d/m/y', strtotime($appetit->date)) }}</p>
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