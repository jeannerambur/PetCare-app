@extends('layouts.app')

@section('content')


<navbarpets :title="'Pets'" :color="blue"></navbarpets>

<style>
  .uper {
    margin-top: 40px;
  }
  .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>

<div class="container-home-page">

    <div class="presentation">
        <div class="username-hi">
            Hi <strong>{{ Auth::user()->name }}</strong>
        </div>
        <div class="username-subtitle">
            Let’s take care of your pets
        </div>

    <div class="button-health">
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

    </div>

    </div>
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