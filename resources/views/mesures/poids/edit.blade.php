@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier Poids
  </div>

  <form method="post" action="{{ route('poids.update-poids', $poids->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="poids">poids :</label>
        <input type="text" class="form-control" name="poids" value="{{ $poids->poids }}"/>

        <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection