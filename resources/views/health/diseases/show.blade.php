
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Maladie', 'color'=>'#F2865E'])

<div class="disease-details">
    <div class="card-disease-detail">
        <div class="disease-container">

            <div class='disease-type'>
                <p><span>Type</span> {{$disease->type}}</p>
            </div>
            <div class='disease-name'>
                <p><span>Name</span> {{$disease->name}}</p>
            </div>
            <div class='disease-date'>
                <p><span>Date</span> {{ date('d/m/y', strtotime($disease->date)) }}</p>
            </div>
            <div class='disease-healing-date'>
                <p><span>Healing date</span> {{ date('d/m/y', strtotime($disease->healing_date)) }}</p>
            </div>

        </div>
      </div>



<div class="edit-pet">
        <a href="{{ route('diseases.edit', $disease->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('diseases.destroy', $disease->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection