@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Edit Anti-parasite', 'color'=>'#B1A7F2'])

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier le Vermifuge
  </div>

  <form method="post" action="{{ route('pestcontrols.update', $pestcontrol->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <label for="type">Type :</label>
        <input type="text" class="form-control" name="type" value="{{ $pestcontrol->type }}"/>

        <label for="name">Name :</label>
        <input type="text" class="form-control" name="name" value="{{ $pestcontrol->name }}"/>

        <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <label for="dose">Dose:</label>
          <input type="text" class="form-control" name="dose" value="{{ $pestcontrol->dose }}"/>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection




