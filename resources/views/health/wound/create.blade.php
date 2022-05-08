@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add Blessure', 'color'=>'#F2865E'])

<div class="add-pet">
  <div class="add-pet-title">
    Add Wound
  </div>

  <div class="card-body">

      <form method="post" action="{{ route('wounds.store-wound', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

         <label for="name">Name :</label>
        <input type="text" class="form-control" name="name"/>

        <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <label for="healing_date">Date:</label>
          <input type="date" id="date" name="healing_date" class="date-form">

          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection