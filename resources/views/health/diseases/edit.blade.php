@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Edit Maladie', 'color'=>'#F2865E'])

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier la Blessure
  </div>

  <form method="post" action="{{ route('diseases.update-disease', $disease->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Name :</label>
        <input type="text" class="form-control" name="name"/>

        <label for="type">Type :</label>
        <input type="text" class="form-control" name="type"/>


        <label for="begin_date">Date:</label>
          <input type="date" id="date" name="begin_date" class="date-form">

          <label for="healing_date">Date:</label>
          <input type="date" id="date" name="healing_date" class="date-form">
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection




