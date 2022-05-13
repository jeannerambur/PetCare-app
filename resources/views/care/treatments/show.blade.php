
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Traitement', 'color'=>'#B1A7F2'])


<div class="treatment-details">
    <div class="card-treatment-detail">
        <div class="treatment-container">

            <div class='treatment-name'>
                <p><span>Name</span> {{$treatment->name}}</p>
            </div>
            <div class='treatment-quantite'>
                <p><span>Quantite</span> {{$treatment->quantite}}</p>
            </div>
            <div class='treatment-date'>
                <p><span>Date</span> {{ date('d/m/y', strtotime($treatment->date)) }}</p>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('treatments.edit', $treatment->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('treatments.destroy', $treatment->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection