@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Historique', 'color'=>'#827EF2'])

<div class="history-home-page">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
    <div class="history-page">
        <div class="title">Choose your pet</div>
        <div class="cards-pets">
        @foreach($pets as $pet)
        <div class="card-pet">
            <a href="{{ route('history.show', $pet->id)}}">
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
    </div>


<div>
@endsection