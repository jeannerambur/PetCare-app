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
    Add pestcontrol
  </div>

  <div class="card-body">

      <form method="post" action="{{ route('pestcontrols.store-pestcontrol', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

         <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" class="form-control" name="type"/>
          </div>

          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <label for="dose">Dose:</label>
          <input type="text" class="form-control" name="dose"/>

          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection