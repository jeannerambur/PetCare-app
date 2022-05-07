@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Edit Traitement', 'color'=>'#B1A7F2'])

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier le Traitement
  </div>

  <form method="post" action="{{ route('treatments.update', $treatment->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Name :</label>
        <input type="text" class="form-control" name="name" value="{{ $treatment->name }}"/>

        <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <label for="quantite">Quantite:</label>
          <input type="text" class="form-control" name="quantite" value="{{ $treatment->quantite }}"/>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection




