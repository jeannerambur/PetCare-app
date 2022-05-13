
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Alimentation', 'color'=>'#FFB5B1'])

<div class="food-details">
    <div class="card-food-detail">
        <div class="food-container">

            <div class='food-type'>
                <p><span>Type</span> {{$food->type}}</p>
            </div>

            <div class='food-quantite'>
                <p><span>Quantite</span> {{$food->quantite}} g</p>
            </div>

        </div>
      </div>



    <div class="edit-pet">
        <a href="{{ route('foods.edit', $food->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('foods.destroy', $food->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>

@endsection