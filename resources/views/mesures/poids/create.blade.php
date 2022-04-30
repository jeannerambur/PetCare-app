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
    Add Poids
  </div>

  <div class="card-body">

      <form method="post" action="{{ route('poids.store-poids', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

          <div class="form-group">
              <label for="poids">poids:</label>
              <input type="text" class="form-control" name="poids"/>
          </div>

          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">


          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection