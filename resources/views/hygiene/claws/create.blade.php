@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Create Claw', 'color'=>'#FFB5B1'])

<div class="create-health">

  <div class="card-body">

    <form method="post" action="{{ route('claws.store-claw', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

         <div class="form-date">
              <label for="date" class="date" >Date:</label>
              <input type="date" id="date" name="date" class="date-form">
        </div>

        <button type="submit" class="btn-submit">Ajouter</button>

    </form>

  </div>
</div>
@endsection