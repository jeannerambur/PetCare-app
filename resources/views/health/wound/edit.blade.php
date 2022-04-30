@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier la Blessure
  </div>

  <form method="post" action="{{ route('wounds.update', $wound->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Name :</label>
        <input type="text" class="form-control" name="name" value="{{ $wound->name }}"/>

        <label for="wound_date">Date:</label>
          <input type="date" id="date" name="wound_date" class="date-form">

          <label for="healing_date">Date:</label>
          <input type="date" id="date" name="healing_date" class="date-form">

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection




