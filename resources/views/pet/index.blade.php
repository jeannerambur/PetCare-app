@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'', 'color'=>'#827EF2'])


<div class="container-home-page">

    <div class="presentation">
        <div class="username-hi">
            Coucou <strong>{{ Auth::user()->name }}</strong>
        </div>
        <div class="username-subtitle">
          Prenons soin de vos animaux de compagnie
        </div>

    <!-- <div class="button-health">
        <div class="button-soins">
          <button onclick="window.location.href = '/pets';"></button>
          <p>Soins</p>
        </div>

        <div class="button-sante">
          <button onclick="window.location.href = '/pets';"></button>
          <p>Santé</p>
        </div>

        <div class="button-mesure">
          <button onclick="window.location.href = '/pets';"></button>
          <p>Mesures</p>
        </div>

        <div class="button-hygiene">
          <button onclick="window.location.href = '/pets';"></button>
          <p>Hygiène</p>
        </div>

    </div>-->

    <a href="{{  url('/history')}}">
      <div class="history-pets">
        <div class="history-widget">
          <font-awesome-icon icon="fa-solid fa-clock-rotate-left" size="2x" />

        </div>
        <p>Historique</p>
      </div>
    </a>


    <div class="pets-card">
        <div class="my-pets">
            My Pets
        </div>
        <button class="button-add-pet" onclick="window.location.href = '{{ url('/pets/create') }}' ">+</button>

    </div>


</div>

<div class="uper">

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
          <img src="{{ $pet->image }}" height="75" width="75" alt="" />
          </div>
          <div class="pet-details">
            <div class="pet-infos">
              <div class="pet-name">
                <p>{{$pet->name}}</p>
              </div>
            </div>
            <div class="sex">
                @if(($pet->sex) == 'male')
                  <div class="pet-sex">
                      <font-awesome-icon icon="fa-solid fa-mars" :style="{ color: '#63A5F1' }"/>
                  </div>
                  @else
                  <div class="pet-sex">
                      <font-awesome-icon icon="fa-solid fa-venus" :style="{ color: '#FFB5B1' }"/>
                  </div>
                  @endif
            </div>
          </div>
        </div>
        </a>
      </div>
      @endforeach
  </div>

<div>
@endsection