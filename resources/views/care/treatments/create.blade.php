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
    Add Treatment
  </div>

  <div class="card-body">

      <form method="post" action="{{ route('treatments.store-treatment', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <label for="quantite">Quantite:</label>
          <input type="text" class="form-control" name="quantite"/>

          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection