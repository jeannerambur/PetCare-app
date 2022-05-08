
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Vermifuge', 'color'=>'#B1A7F2'])


<div class="vaccine-details">
    <div class="card-vaccine-detail">
        <div class="vaccine-container">

            <div class='vaccine-type'>
                <p><span>Type</span> {{$vaccine->type}}</p>
            </div>

            <div class='vaccine-name'>
                <p><span>Name</span> {{$vaccine->name}}</p>
            </div>

            <div class='vaccine-dose'>
                <p><span>Dose</span> {{$vaccine->dose}}</p>
            </div>
            <div class='vaccine-date'>
                <p><span>Date</span> {{ date('d/m/y', strtotime($vaccine->date)) }}</p>
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