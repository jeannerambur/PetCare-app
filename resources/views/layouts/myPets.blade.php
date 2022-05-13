@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Mes Animaux', 'color'=>'#F2CA80'])


<div class="my-pets">

    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <div class="cards-pets">
        @foreach($pets as $pet)
        <div class="card-pet">
        <a href="{{ route('pets.show', $pet->id)}}">
        <div class="pet-container">
            <div class="pet-img">
            <img src="{{ Storage::url($pet->image) }}" height="75" width="75" alt="" />
            </div>
            <div class="pet-name">
            <p>{{$pet->name}}</p>
            </div>
        </div>
        </a>
        </div>
        @endforeach
    </div>

    <div>
@endsection