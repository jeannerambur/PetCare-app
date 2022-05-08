
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Allergie', 'color'=>'#F2865E'])


<div class="allergy-details">
    <div class="card-allergy-detail">
        <div class="allergy-container">

            <div class='allergy-name'>

                <p><span>Allergy</span> {{$allergy->name}}</p>
            </div>
            <div class='allergy-date'>
                <p><span>Date</span> {{ date('d/m/y', strtotime($allergy->date)) }}</p>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('allergies.edit', $allergy->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('allergies.destroy', $allergy->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection