@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Poids', 'color'=>'#F2CA80'])


<div class="poids-details">
    <div class="card-poids-detail">
        <div class="poids-container">

            <div class='poids-name'>

                <p><span>Poids</span> {{$poids->poids}} kg</p>
            </div>
            <div class='poids-date'>
                <p><span>Date</span> {{ date('d/m/y', strtotime($poids->date)) }}</p>
            </div>

        </div>
      </div>



    <div class="edit-pet">
        <a href="{{ route('poids.edit', $poids->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('poids.destroy', $poids->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>

</div>

@endsection