@extends('layouts.app')
@section('content')
@include('layouts.navbar', ['title'=>'Add Allergie', 'color'=>'#F2865E'])

<div class="create-allergy">

  <div class="card-body">

      <form method="post" action="{{ route('allergies.store-allergy', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

          <div class="form-type">
              <label for="type" class="type" >Type:</label>
              <input type="text" class="form-control @error('type') is-invalid @enderror" required name="type" placeholder="Selection du type" id="type"/>
              @error('type')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-name">
              <label for="name" class="name">Name: (facultatif)</label>
              <input type="text" class="form-control" name="name" placeholder="name" id="name"/>
          </div>

          <div class="form-date">
              <label for="date" class="date" >Date:</label>
              <input type="date" id="date" name="date"  placeholder="yyy-mm-dd" class="date-form @error('date') is-invalid @enderror" required>
              @error('date')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>


          <button type="submit" class="btn-submit">Ajouter</button>

      </form>
  </div>
</div>
@endsection