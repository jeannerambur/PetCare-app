

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

  <form method="post" action="{{ route('appetit.update', $appetit->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="appetit">Appetit :</label>
        <input type="text" class="form-control" name="appetit" value="{{ $appetit->appetit }}"/>

        <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <label for="heure">Heure:</label>
          <input type="text" class="form-control" name="heure" value="{{ $appetit->heure }}"/>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection