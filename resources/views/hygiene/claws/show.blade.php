
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Griffes', 'color'=>'#FFB5B1'])


<div class="health-details">
    <div class="card-health-detail">
        <div class="health-container">

            <div class='health-date'>
                <p><span>Date</span> {{ date('d/m/y', strtotime($claw->date)) }}</p>
            </div>

        </div>
      </div>



    <div class="edit-pet">
        <a href="{{ route('claws.edit', $claw->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('claws.destroy', $claw->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>

</div>

@endsection