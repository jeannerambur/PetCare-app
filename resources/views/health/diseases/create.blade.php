@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add Maladie', 'color'=>'#F2865E'])

<div class="create-disease">
  <div class="card-body">

      <form method="post" action="{{ route('diseases.store-disease', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

        <div class="form-name">
          <label for="name" class="name">Name :</label>
          <input type="text" class="form-control" name="name"/>

        </div>

        <div class="form-type">
          <label for="type" class="type">Type :</label>
          <input type="text" class="form-control" name="type"/>
        </div>

        <div class="form-date">
          <label for="date" class="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">
        </div>

        <div class="form-healing-date">
          <label for="healing_date" class="healing-date">Healing date:</label>
          <input type="date" id="healing-date" name="healing_date" class="date-form">
        </div>

        <button type="submit" class="btn-submit">Ajouter</button>
      </form>
  </div>
</div>
@endsection