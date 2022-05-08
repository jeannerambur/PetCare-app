
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Vermifuge', 'color'=>'#B1A7F2'])


<div class="pestcontrol-details">
    <div class="card-pestcontrol-detail">
        <div class="pestcontrol-container">

            <div class='pestcontrol-type'>
                <p><span>Type</span> {{$pestcontrol->type}}</p>
            </div>
            <div class='pestcontrol-name'>
                <p><span>Name</span> {{$pestcontrol->name}}</p>
            </div>
            <div class='pestcontrol-dose'>
                <p><span>Dose</span> {{$pestcontrol->dose}}</p>
            </div>
            <div class='pestcontrol-date'>
                <p><span>Date</span> {{ date('d/m/y', strtotime($pestcontrol->date)) }}</p>
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