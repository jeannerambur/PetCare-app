@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add Vermifuge', 'color'=>'#B1A7F2'])

<div class="create-vaccine">

  <div class="card-body">

      <form method="post" action="{{ route('vaccines.store-vaccine', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

         <div class="form-type">
              <label for="name" class="type">Type:</label>
              <input type="text" class="form-control" name="type" placeholder="Type" id="type"/>
          </div>

          <div class="form-name">
              <label for="name" class="name">Name:</label>
              <input type="text" class="form-control" name="name" placeholder="name" id="name"/>
          </div>

          <div class="form-dose">
            <label for="dose" class="dose">Dose:</label>
            <input type="text" class="form-control" name="dose"/>
          </div>

          <div class="form-date">
              <label for="date" class="date" >Date:</label>
              <input type="date" id="date" name="date" class="date-form">
          </div>


          <button type="submit" class="btn-submit">Ajouter</button>

      </form>
  </div>
</div>
@endsection