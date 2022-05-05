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
    Add Food
  </div>

  <div class="card-body">

      <form method="post" action="{{ route('foods.store-food', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

          <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" class="form-control" name="type"/>
          </div>

          <label for="marque">Marque:</label>
          <input type="text" class="form-control" name="marque"/>

          <label for="quantite">Quantite:</label>
          <input type="text" class="form-control" name="quantite"/>

          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">


          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection