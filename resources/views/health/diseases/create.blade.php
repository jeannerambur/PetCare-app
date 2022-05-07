@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add Maladie', 'color'=>'#F2865E'])

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="add-pet">
  <div class="add-pet-title">
    Add Disease
  </div>

  <div class="card-body">

      <form method="post" action="{{ route('diseases.store-disease', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

         <label for="name">Name :</label>
        <input type="text" class="form-control" name="name"/>

        <label for="type">Type :</label>
        <input type="text" class="form-control" name="type"/>


        <label for="begin_date">Date:</label>
          <input type="date" id="date" name="begin_date" class="date-form">

          <label for="healing_date">Date:</label>
          <input type="date" id="date" name="healing_date" class="date-form">

          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection