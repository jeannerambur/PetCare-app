@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier le Vaccin
  </div>

  <form method="post" action="{{ route('vaccines.update', $vaccine->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <label for="type">Type :</label>
        <input type="text" class="form-control" name="type" value="{{ $vaccine->type }}"/>

        <label for="name">Name :</label>
        <input type="text" class="form-control" name="name" value="{{ $vaccine->name }}"/>

        <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <label for="dose">Dose:</label>
          <input type="text" class="form-control" name="dose" value="{{ $vaccine->dose }}"/>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection




