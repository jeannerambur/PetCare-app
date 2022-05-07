@extends('layouts.app')
@section('content')
@include('layouts.navbar', ['title'=>'Add Allergie', 'color'=>'#F2865E'])


<div class="add-pet">
  <div class="add-pet-title">
    Add Allergy
  </div>

  <div class="card-body">

      <form method="post" action="{{ route('allergies.store-allergy', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

          <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" class="form-control" name="type"/>
          </div>

          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <label for="Name">Name:</label>
          <input type="text" class="form-control" name="name"/>

          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection