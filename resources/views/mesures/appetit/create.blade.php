<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="add-pet">
  <div class="add-pet-title">
    Add Appetit
  </div>

  <div class="card-body">

      <form method="post" action="{{ route('appetit.store-appetit', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

          <div class="form-group">
              <label for="appetit">Appetit:</label>
              <input type="text" class="form-control" name="appetit"/>
          </div>

          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <label for="heure">Heure:</label>
          <input type="text" class="form-control" name="heure"/>

          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection