@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier l'Allergie
  </div>

  <form method="post" action="{{ route('allergies.update', $allergy->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="type">Type :</label>
        <input type="text" class="form-control" name="type" value="{{ $allergy->type }}"/>

        <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" value="{{ $allergy->name }}"/>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection






@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier l'Allergie
  </div>

  <form method="post" action="{{ route('allergies.update', $allergy->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" class="form-control" name="type"/>
          </div>

          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <label for="Name">Name:</label>
          <input type="text" class="form-control" name="name"/>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection