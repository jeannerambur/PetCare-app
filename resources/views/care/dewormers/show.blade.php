
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Vermifuge', 'color'=>'#B1A7F2'])


<div class="dewormer-details">
    <div class="card-dewormer-detail">
        <div class="dewormer-container">

            <div class='dewormer-type'>
                <p><span>Type</span> {{$dewormer->type}}</p>
            </div>
            <div class='dewormer-name'>
                <p><span>Name</span> {{$dewormer->name}}</p>
            </div>
            <div class='dewormer-date'>
                <p><span>Date</span> {{ date('d/m/y', strtotime($dewormer->date)) }}</p>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('dewormers.edit', $dewormer->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('dewormers.destroy', $dewormer->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection