@extends('layouts.app')

@section('content')

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
        <div class="username">
            Hi <strong>{{ Auth::user()->name }}</strong>
        </div>
        <div class="username-subtitle">
            Let’s take care of your pets
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
      <div class="card">
        <div class="container">
        <img src="{{ Storage::url($pet->image) }}" height="75" width="75" alt="" />
          <h4><b>{{$pet->name}}</b></h4>
          <p>Architect & Engineer</p>
        </div>
        <a href="{{ route('pets.edit', $pet->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('pets.destroy', $pet->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </div>
      @endforeach
  </div>

<div>
@endsection